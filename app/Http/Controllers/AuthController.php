<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function postLogin(Request $request){
        $request->validate([
            'fullname' => 'required',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('fullname', 'password');
        if (Auth::guard('signup')->attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:signup',
            'password' => 'required|min:6',
        ]);

        $register=new Login;
        if($request->isMethod('post')){
            $register->fullname=$request->get('name');
            $register->email=$request->get('email');
            $register->password=Hash::make($request->get('password'));
            $register->save();
        }
        return redirect('/')->withSuccess('Great! You have Successfully loggedin');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
