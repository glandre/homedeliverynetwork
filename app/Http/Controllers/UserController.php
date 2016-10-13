<?php

namespace App\Http\Controllers;

use App\UserSettings;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class UserController extends Controller
{
    protected $request;
    protected $session;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->session = session();
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


        if($this->request->file('picture')) {
            \Auth::user()->picture = $this->request->file('picture')->store('public');
        }

        if($this->request->password) {
            \Auth::user()->password = bcrypt($this->request->password);
        }

        \Auth::user()->update();

        $this->session->flash('message_success', trans('strings.saveSuccess'));

        return $this->profile();
    }

    public function updateSettings() {
        $settings = \Auth::user()->settings ?? new UserSettings(['user_id' => \Auth::user()->id]);

        $settings->enable_notifications = $this->request->enable_notifications == true;

        $settings->save();

        return $this->settings();
    }

    private function validateProfile() {
        Validator::make($this->request->all(), [
            'name' => 'required|max:255',
            'password' => 'min:6|confirmed',
            'picture' => 'max:511'
        ])->validate();
    }
}
