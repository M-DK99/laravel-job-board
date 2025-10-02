<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignupForm(){
        return view('auth.signup',['pageTitle' => "Sign Up"]);
    }

    public function signup(SignupRequest $request){ 
        $user = new User();
        $user->name = $request->input('name');  
        $user->email = $request->input('email');
        $user->password = $request->input('password');  

        $user->save();

        auth()->login($user);
        // Auth::login($user);

        return redirect('/');
    }

    public function showLoginForm(){
        return view('auth.login' ,['pageTitle' => "Login"]);
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');
        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        } 
        // if (Auth::attempt())
        return back()->withErrors([
            'email' => 'This Email Is Not Mach',
        ])->withInput();
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    } 
}
