<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Fee;
use App\SystemVar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Session;
use Redirect;
use Carbon\Carbon;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){

      // dd($data);
      $validator = Validator::make($data, [
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
          'org_name' => 'required',
          'name' => 'required|string|max:255',
          'phone' => 'required|digits:10',
          'address' => 'required',
          'city' => 'required',
          'state' => 'required',
          'zip' => 'required|digits:5',

          'billing_name' => 'required|string|max:255',
          'billing_phone' => 'required|digits:10',
          'billing_address' => 'required',
          'billing_city' => 'required',
          'billing_state' => 'required',
          'billing_zip' => 'required|digits:5',

          'org_size' => 'required|numeric',
          'stripeToken' => 'required_unless:trialOnly,"on"'
      ]);

      if($validator){
        return $validator;
      }else{
        return back()->withInput()->withErrors($validator);
      }

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('info', 'Welcome to IAgreek! </br>
         To get started visit out <a style="color:#42A084" href="getting_started"> our Getting Started Guide </a>
        or
         open up the menu and select "Sign Into App".
         ');
        $new_user =  User::create([
              'email' => $data['email'],
              'password' => bcrypt($data['password']),
              'org_name' => $data['org_name'],
              'name' => $data['name'],
              'phone' => preg_replace("/[^0-9]/", "", $data['phone']),
              'address' => $data['address'],
              'city' => $data['city'],
              'state' => $data['state'],
              'zip' => $data['zip'],
              'website' => $data['website'],
              'org_type' => $data['org_type'],

              'billing_name' => $data['billing_name'],
              'billing_phone' => $data['billing_phone'],
              'billing_address' => $data['billing_address'],
              'billing_city' => $data['billing_city'],
              'billing_state' => $data['billing_state'],
              'billing_zip' => $data['billing_zip'],

              'org_size' => $data['org_size'],

              'trial_ends_at' => array_key_exists('trialOnly', $data) && $data['trialOnly'] === "on" ? Carbon::now()->addDays(SystemVar::trialDays()) : null,
        ]);

        // if signed up without card then we just carry on
        if( array_key_exists('trialOnly', $data) && $data['trialOnly'] === "on" ){ return $new_user;}

        $hasCoupon = !empty($data['coupon']);
        $couponValid = !empty($data['coupon']) ? RegisterController::isCouponValid($data['coupon']) : false;

        if($hasCoupon && !$couponValid){
          Session::flash('failure','That Coupon is Not Valid.');
          $new_user->delete();
          return Redirect::to('/register')->withInput()->send();
        }

        try{
          # register new user and subscribe them to the appropriate plan w/ trial days and coupon if applicable
          if($hasCoupon){
            $new_user->newSubscription('subscription', Fee::determineNewUserSubType( (int)$data['org_size'] ) )
                  ->trialDays( SystemVar::trialDays() )
                  ->withCoupon($data['coupon'])
                  ->create($data['stripeToken'],[
                          'email' => $new_user->email
                        ]);
          }else{
            $new_user->newSubscription('subscription', Fee::determineNewUserSubType( (int)$data['org_size'] ) )
                  ->trialDays( SystemVar::trialDays() )
                  ->create($data['stripeToken'],[
                          'email' => $new_user->email
                        ]);
          }
        }catch(\Stripe\Error\Card $e) {
          # should the card present errors; capture them and return to frontend
            $body = $e->getJsonBody();
            $err  = $body['error'];
            Session::flash('failure',$err['message']);
            $new_user->delete();
            return Redirect::to('/register')->withInput()->send();
        }

        return $new_user;
    }

    public static function isCouponValid($coupon){
      \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET']);
      try {
          $coupon = \Stripe\Coupon::retrieve($coupon);
          return $coupon->valid;
      } catch(\Exception $e) {
          return false;
      }
    }
}
