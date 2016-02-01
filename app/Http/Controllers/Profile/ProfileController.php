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
}