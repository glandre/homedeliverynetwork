<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? "," . $data['id'] : '';
        return Validator::make($data, [
            'name' => 'required|max:255|unique:vendors,name' . $id,
            'description' => 'required|max:255'
        ]);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function pluckNames($orderBy = 'name') {
        return $this->orderBy($orderBy)->pluck('name', 'id');
    }
}
