<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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
        'price',
        'incoming',
        'continue_selling',
        'type_id',
        'vendor_id',
        'picture'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? ", " . $data['id'] : '';
        return Validator::make($data, [
            'name' => 'required|max:255|unique:products,name' . $id,
            'description' => 'required|max:255',
            'quantity' => 'integer|min:0',
            'incoming' => 'integer|min:0',
            'price' => 'decimal|min:0',
            'continue_selling' => 'boolean',
            'type_id' => 'required',
            'vendor_id' => 'required',
            'picture' => 'max:511'
        ]);
    }

    public function type() {
        return $this->belongsTo(ProductType::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function pictureUrl() {
        if($this->picture) {
            return Storage::url($this->picture);
        }

        if($this->type->picture) {
            return Storage::url($this->type->picture);
        }

        if($this->vendor->picture) {
            return Storage::url($this->vendor->picture);
        }

        return '';
    }
}
