<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       $applicant_id = str_pad(rand(1, 5000), 10, "0", STR_PAD_LEFT);
       $pass=$data['password'];
       $name=$data['name'];
      $email=$data['email'];
       $to_name =config('custom_env_Variables.MAIL_FROM_NAME');
       $to_email =config('custom_env_Variables.MAIL_TO_CONTACT');
          $data = array('name'=>$name, "email" =>$email,'user_ref'=>$applicant_id,'subject'=>'New User has been Register','app_url'=>config('custom_env_Variables.APP_URL'),'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.register', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name) 
            ->subject('A new Member has been Registered');
          $message->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });

     
          $to_name2 =$name;
       $to_email2 =$email;
          $data2 = array('name'=>$to_name2, "email" => $to_email2,'user_ref'=>$applicant_id,'subject'=>'New User has been Register','app_url'=>config('custom_env_Variables.APP_URL'),'logo'=>asset('img').'/emailLogo.png');
          
          Mail::send('email.register', $data2, function($message2) use ($to_name2, $to_email2) {
          $message2->to($to_email2, $to_name2) 
            ->subject('Congratulation your Registered Successfully');
          $message2->from( config('custom_env_Variables.MAIL_FROM_ADDRESS'),config('custom_env_Variables.MAIL_FROM_NAME'));
           });

      

        return User::create([
            'name' => $name,
            'email' => $email,
            'user_ref'=>$applicant_id,
            'password' => Hash::make($pass),
        ]);

     

     





    }
}
