<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'incoming',
        'continue_selling',
        'type_id',
        'vendor_id'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? ", " . $data['id'] : '';
        return Validator::make($data, [
            'name' => 'required|max:255|unique:product_types' . $id,
            'description' => 'required|max:255',
            'quantity' => 'integer|min:0',
            'incoming' => 'integer|min:0',
            'continue_selling' => 'boolean',
            'type_id' => 'required',
            'vendor_id' => 'required'
        ]);
    }

    public function type() {
        return $this->belongsTo(ProductType::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
