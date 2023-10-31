<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle user login.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'fullname' => 'required',
            'password' => 'required|min:6',
        ]);

        // Retrieve user credentials from the request
        $credentials = $request->only('fullname', 'password');

        // Attempt to authenticate the user
        if (Auth::guard('signup')->attempt($credentials)) {
            return redirect()->intended('/')
                        ->with('success','You have Successfully logged in');
        }

        // Redirect back with an error message for invalid credentials
        return redirect()->back()->with('error','Oops! You have entered invalid credentials');
    }

    /**
     * Handle user registration.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function postRegistration(Request $request)
    {
        // Validate registration input fields
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:signup',
            'password' => 'required|min:6',
        ]);

        // Create a new Login model instance for registration
        $register = new Login;

        if($request->isMethod('post')) {
            // Set user data for registration
            $register->fullname = $request->get('name');
            $register->email = $request->get('email');
            $register->password = Hash::make($request->get('password'));
            $register->save();
        }

        return redirect()->back()->with('success','Great! You have Successfully signed up, Now Please Login');
    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout() 
    {
        // Clear the user session and log them out
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
