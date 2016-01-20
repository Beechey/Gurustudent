<?php

namespace Gurustudent\Http\Controllers\Auth;

use Gurustudent\Models\User;
use Auth;
use Gurustudent\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm() {
        return view('auth.register');
    }

    public function postSignUp(Request $request) {
        $this->validate($request, [
            'username' => 'required|unique:users|alpha_dash|max:20',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('info', 'Your account has been created! You can now log in.');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('danger', 'We could not find an account with those details. Please try again.');   
        } else {
            return redirect()->route('home')->with('info', 'You have successfully logged in.'); 
        }        
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home')->with('info', 'You have successfully logged out.'); 
    }
}