<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function total() {
        return 0;
    }
}
