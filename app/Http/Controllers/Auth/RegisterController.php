<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'picture' => $data['picture']->store('public') ?? null,
            'password' => bcrypt($data['password']),
            'referrer_id' => $referrer_id
        ]);

        if($user) {
            $this->request->session()
                 ->flash('message_success', 'Thanks for your registration, we will contact you soon.');

            // send email
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
