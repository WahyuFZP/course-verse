<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required',''],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/profile')->with('success','You have been successfully logged in!');
        }

        return back()->withErrors([
            'login_error' => 'Invalid email or password.',
        ]);
    }
    
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        session()->flash('success', 'You have been successfully logged out!');
     
        return redirect('/login');
    }
}

   
