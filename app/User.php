<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_super',
        'picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? "," . $data['id'] : '';
        $passwordConfirmed = !$isUpdate ? '|confirmed' : '';
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email' . $id,
            'password' => 'min:6' . $passwordConfirmed,
            'picture' => 'max:511'
        ]);
    }

    public function pictureUrl() {
        if($this->picture) {
            return Storage::url($this->picture);
        }

        return Storage::url('avatar.png');
    }

    public function settings() {
        return $this->hasOne(UserSettings::class);
    }

    public function profile() {
        return ($this->is_super) ? 'Super' : 'User';
    }
}
