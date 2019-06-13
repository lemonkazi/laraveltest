<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth; //class import
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
      //validate the fields....
      
      $crendentials = [ 'email' => $request->email , 'password' => $request->password ];
      
      if(Auth::attempt($crendentials,$request->remember)){ // login attempt
        return redirect()->route('home')
                        ->with('success','login successfully.');
        //login successful, redirect the user to your preferred url/route...
      }
      
      //login failed...
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/')->with('success','logout successfully.');;
    }

    
}
