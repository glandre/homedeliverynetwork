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
            'status' => 'in:Cart,New,Paid,Complete', //['Cart', 'New', 'Paid', 'Complete']
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
}
