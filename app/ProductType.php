<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class ProductType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'picture'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? ", " . $data['id'] : '';
        return Validator::make($data, [
            'name' => 'required|max:255|unique:product_types' . $id,
            'description' => 'required|max:255',
            'picture' => 'max:511'
        ]);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function pluckNames($orderBy = 'name') {
        return $this->orderBy('name')->pluck('name', 'id');
    }
}
