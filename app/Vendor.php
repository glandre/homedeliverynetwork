<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Validator;

class Vendor extends Model
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
        $id = $isUpdate ? "," . $data['id'] : '';
        return Validator::make($data, [
            'name' => 'required|max:255|unique:vendors,name' . $id,
            'description' => 'required|max:255',
            'picture' => 'max:511'
        ]);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function pluckNames($orderBy = 'name')
    {
        return $this->orderBy('name')->pluck('name', 'id');
    }

    public function pictureUrl()
    {
        if(!config('app.file_use_defaults')) {
            if($this->picture) {
                return Storage::url($this->picture);
            }
        }
        return Storage::url('gift-box-freedigital.jpg');
    }
}
