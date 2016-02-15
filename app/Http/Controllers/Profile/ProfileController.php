<?php

namespace Gurustudent\Http\Controllers\Profile;

use Gurustudent\Http\Controllers\Controller;
use Gurustudent\Models\User;
use Gurustudent\Models\Post;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function getProfile($username) {
    	$user = User::where('username', $username)->first();
        $post = Post::

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
    		'username' => 'required|unique:users|alpha_dash|max:20',
    		'title' => 'required|max:50',
            'email' => 'required|unique:users|email|max:255',
    	]);

    	Auth::user()->update([
    		'username' => $request->input('username'),
			'title' => $request->input('title'),
    		'email' => $request->input('email'),
    	]);

    	return redirect()->route('profile.edit')->with('info', 'Your details have been updated.');
    }
}