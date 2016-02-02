<?php

namespace Gurustudent\Http\Controllers\Profile;

use Gurustudent\Http\Controllers\Controller;
use Gurustudent\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($username) {
    	$user = User::where('username', $username)->first();

    	if(!$user) {
    		abort(404);
    	}

    	return view('profile.index')->with('user', $user);
    }

    public function getEdit() {
    	return view('profile.edit');
    }

    public function postEdit(Request $request) {
    	$this->validate($request, [
    		'username' => 'unique:users|alpha_dash|max:20',
            'email' => 'unique:users|email|max:255',
            'title' => 'max:20',
            'password' => 'required|max:6'
    	]);
    }
}