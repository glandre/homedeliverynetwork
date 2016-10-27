<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'status'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        return Validator::make($data, [
            'user_id' => 'exists:users',
            'status' => 'in:Cart,New,Paid,Shipped', //['Cart', 'New', 'Paid', 'Shipped']
        ]);
    }

    public static function countNew() {
        return self::where('status', 'New')->count();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function product($productId) {
        return $this->belongsToMany(Product::class)->wherePivot('product_id', $productId)->withPivot('quantity')->first();
    }

    public function total() {
        $total = 0;
        foreach($this->products as $product) {
            $total += $product->price * $product->pivot->quantity;
        }

        return $total;
    }

    public function process($status)
    {
        \DB::beginTransaction();
        try {
            $messages = $this->validateProducts();

            $allowed = $messages['errors']->isEmpty();
            if ($status == 'Shipped') {
                $allowed &= $messages['warnings']->isEmpty();
            }

            if ($allowed)
            {
                $this->status = $status;
                if ($this->save())
                {
                    if($status == 'Shipped')
                    {
                        $this->updateProducts();
                    }

                    \DB::commit();
                    return $messages;
                }
            }
        }
        catch(\Exception $exception) {
            $messages['errors']->push($exception->getMessage());
        }

        \DB::rollBack();
        return $messages;
    }

    private function updateProducts() {
        foreach ($this->products as $product) {
            $product->quantity -= $product->pivot->quantity;
            $product->saveOrFail();
        }
    }

    /**
     * @return array ['errors' => collect(), 'warnings' => collect()]
     */
    public function validateProducts()
    {
        $messages = ['errors' => collect(), 'warnings' => collect()];
        foreach ($this->products as $product) {
            if ($product->pivot->quantity > $product->quantity) {
                if ($product->continue_selling) {
                    $messages['warnings']->push($product->name);
                } else {
                    $messages['errors']->push($product->name);
                }
            }
        }
        return $messages;
    }

    public static function reduceValidationMessages($intro, $collection, $key)
    {
        return $collection[$key]->isEmpty() ? '' : $intro . ' ' .
            $collection[$key]->reduce(function ($carry, $item) {
                return (empty($carry)) ? $item : $carry . "; " . $item;
            });
    }
}
