<?php

namespace App\Http\Controllers;

use App\UserSettings;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class UserController extends Controller
{
    protected $request;
    protected $user;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->user = \Auth::user();
    }

    public function profile() {
        return view('user.profile');
    }

    public function settings() {
        return view('user.settings');
    }

    public function updateProfile() {

        $this->validateProfile();

        \Auth::user()->name = $this->request->name;
        \Auth::user()->last_name = $this->request->last_name;


        if($this->request->file('picture')) {
            \Auth::user()->picture = $this->request->file('picture')->store('public');
        }

        if($this->request->password) {
            \Auth::user()->password = bcrypt($this->request->password);
        }

        \Auth::user()->update();

        session()->flash('message_success', trans('strings.saveSuccess'));
        session()->save();
        return $this->profile();
    }

    public function updateSettings() {
        $settings = \Auth::user()->settings ?? new UserSettings(['user_id' => \Auth::user()->id]);

        $settings->enable_notifications = $this->request->enable_notifications == true;

        $settings->save();

        return $this->settings();
    }

    public function getReferralCode() {

        if(! (\Auth::user()->referral_code)) {
            \Auth::user()->referral_code = md5(date('YmdHisu'));
            \Auth::user()->saveOrFail();
        }
        session()->flash('message_success',
                     'Your referral code is: (' . \Auth::user()->referral_code . ')' .
                     ' - Direct Link: ' . url('/register/referral/' . \Auth::user()->referral_code));

        return back();
    }

    private function validateProfile() {
        Validator::make($this->request->all(), [
            'name' => 'required|max:255',
            'last_name'  => 'required|max:255',
            'password' => 'min:6|confirmed',
            'picture' => 'max:511'
        ])->validate();
    }
}
