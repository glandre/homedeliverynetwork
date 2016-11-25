<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\NewRegistrationNotification;
use App\Mail\SuccessfullySignedUp;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use \Uploadcare;
use Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    protected $request;

    /**
     * Create a new controller instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('guest');
        $this->request = $request;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|regex:[\(\d{3}\)\s*\d{3}\-\d{4}]',
            'picture' => 'required',
            'password' => 'required|min:6|confirmed',
            'referrer_id' => 'exists:users'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $api = new Uploadcare\Api('cc79e063e30c7c41996d', 'e744f785ee9311d80ed6');
        $referrer_id = null;
        if($data['referral_code']) {
            $referrer_user = User::where('referral_code', $data['referral_code'])->first();
            if(!$referrer_user) {
                session()->flash('message_danger', 'Invalid referral code');
                return back();
            }
            $referrer_id = $referrer_user->id;
        }

        

        $user = User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'picture' => $data['picture'],
            'password' => bcrypt($data['password']),
            'referrer_id' => $referrer_id
        ]);

        if($user) {
            session()->flash('message_success', 'Thanks for your registration, we will contact you soon.');

            // \Mail::to($user)->send(new SuccessfullySignedUp());
            // \Mail::to(UserThatShouldBeNotified::onNewRegistration())->send(new NewRegistrationNotification());

            $client = new Client();
            $message = array(
                'to' => $data['email'],
                'from' => "BuyOnlineWeed <info@buyonlineweed.ca>",
                'subject' => 'Registration Successful',
                'html' => '<h1>Welcome</h1><br /><p>Welcome to BOW - we\'re happy to have you</p>
                    <p>BOW</p>
                    <a href="http://homedeliverynetwork.herokuapp.com">homedeliverynetwork.com</a>
                    <a mailto="info@buyonlineweed.ca">info@buyonlineweed.ca</a>'
            );
            $res = $client->request('POST', 'https://hdnemailserver.herokuapp.com/registrations', ['form_params' => $message]);
        }

        return $user;
    }

    public function showRegistrationFormWithReferralCode($code) {
        return view('auth.register', ['code' => $code]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect($this->redirectPath());
    }
}
