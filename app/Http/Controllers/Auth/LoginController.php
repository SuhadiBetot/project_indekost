<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }



    //login

    public function login(Request $request)
    {
        return view('login');
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard-owner')->with('success', 'Berhasil Login');
        }

        $credentials = $request->only('email', 'password');

        // Check if the email does not match any registered email
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return redirect('login')->with('error', 'Email tidak terdaftar.');
        }

        return redirect('login')->with('error', 'Kata sandi salah atau tidak sesuai.');

        // return redirect('login');
    }



}
