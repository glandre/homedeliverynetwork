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

    /**
     * @return double Total price of an order (sum of product price times quantity).
     */
    public function total() {
        $total = 0;
        foreach($this->products as $product) {
            $total += $product->price * $product->pivot->quantity;
        }

        return $total;
    }

    /**
     * @return int Total quantity of products in an order (sum of product quantity).
     */
    public function totalProducts() {
        $totalProducts = 0;
        foreach($this->products as $product) {
            $totalProducts += $product->pivot->quantity;
        }

        return $totalProducts;
    }

    /**
     * @return int Total of all products quantity sold ever (sum of totalProducts for all shipped orders).
     */
    public static function productSold() {
        $orders = self::where('status', 'Shipped')->get();
        $totalProductSold = 0;
        foreach($orders as $order) {
            $totalProductSold += $order->totalProducts();
        }
        return $totalProductSold;
    }

    private static function shippedCount() {
        return self::where('status', 'Shipped')->count();
    }

    /**
     * @return double Total earned with all products sold ever (sum of total for all shipped orders).
     */
    public static function revenue() {
        $orders = self::where('status', 'Shipped')->get();
        $revenue = 0;
        foreach($orders as $order) {
            $revenue += $order->total();
        }
        return $revenue;
    }

    public static function averagePrice() {
        $shippedCount = self::shippedCount();
        return $shippedCount == 0 ? 0 : self::revenue() / $shippedCount;
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

    public function getInfo() {
        $total = $this->total();
        $info = 'Order Summary:<br /><ul>';

        $i = 1;
        foreach($this->products as $product) {
            $partial = $product->price * $product->pivot->quantity;
            $info .= "<li>#$i - {$product->name} - {$product->pivot->quantity} - \${$partial}</li>";
        }
        $info .= "</ul><p>Total: ${total}</p>";

        return $info;
    }
}
