<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    const SUPER = 1;
    const WEBMASTER = 2;
    const ADMIN = 3;
    const FULLMENT = 4;
    const MARKETING = 7;
    const COSTUMER = 8;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'registration_status',
        'email',
        'phone',
        'password',
        'role_id',
        'picture',
        'referral_code',
        'referrer_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public static function validator(array $data, $isUpdate = false)
    {
        $id = $isUpdate ? "," . $data['id'] : '';
        $passwordConfirmed = !$isUpdate ? '|confirmed' : '';
        return Validator::make($data, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'registration_status' => 'in:New,Accepted,Rejected,Resend', //['New', 'Accepted', 'Rejected', 'Resend']
            'email' => 'required|email|max:255|unique:users,email' . $id,
            'phone' => 'required|regex:[\(\d{3}\)\s*\d{3}\-\d{4}]',
            'password' => 'min:6' . $passwordConfirmed,
            'picture' => 'max:511',
        ]);
    }

    public static function pluckRegistrationStatus() {
        return collect([
            'New' => 'New',
            'Accepted' => 'Accepted',
            'Rejected' => 'Rejected',
            'Resend' => 'Resend'
        ]);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function pictureUrl()
    {
        if(!config('app.file_use_defaults')) {
            if($this->picture) {
                return Storage::url($this->picture);
            }
        }
        return Storage::url('avatar.png');
    }

    public function settings() {
        return $this->hasOne(UserSettings::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function referrals() {
        return $this->hasMany(User::class, 'referrer_id');
    }

    public function referrer() {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function isSuper() {
        return $this->role_id == self::SUPER;
    }

    public function isWebmaster() {
        return $this->role_id == self::WEBMASTER;
    }

    public function isCustomer() {
        return $this->role_id == self::COSTUMER;
    }
}
