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
            'price' => 'numeric|min:0',
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

    public function stars() {
        $collection = collect([
            0 => ['full' => 5, 'half' => 0, 'empty' => 0],
            1 => ['full' => 4, 'half' => 1, 'empty' => 0],
            2 => ['full' => 3, 'half' => 2, 'empty' => 0],
            3 => ['full' => 2, 'half' => 2, 'empty' => 1],
            4 => ['full' => 1, 'half' => 2, 'empty' => 2],
            5 => ['full' => 0, 'half' => 1, 'empty' => 3],
        ]);

        return $collection->random();
    }

    public function pictureUrl() {
//        if($this->picture) {
//            return Storage::url($this->picture);
//        }
//
//        if($this->type->picture) {
//            return Storage::url($this->type->picture);
//        }
//
//        if($this->vendor->picture) {
//            return Storage::url($this->vendor->picture);
//        }

        return Storage::url('gift-box-freedigital.jpg');
    }

    public static function newArrivals() {
        return self::all();
    }

    public static function sortedByRate($limit = null) {
        return self::all();
    }

    public static function onSale() {
        return self::all();
    }
}
