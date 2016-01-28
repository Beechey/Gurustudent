<?php

namespace Gurustudent\Http\Controllers\Posts;

use Gurustudent\Models\User;
use Auth;
use Gurustudent\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function showPostForm() {
    //     return view('post.show');
    // }

    // public function postSignUp(Request $request) {
    //     $this->validate($request, [
    //         'username' => 'required|unique:users|alpha_dash|max:20',
    //         'email' => 'required|unique:users|email|max:255',
    //         'password' => 'required|min:6',
    //     ]);

    //     User::create([
    //         'username' => $request->input('username'),
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password')),
    //     ]);

    //     return redirect()->route('home')->with('info', 'Your account has been created! You can now log in.');
    // }

    public function postQuestion(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required|max:1500',
        ]);

        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
    }

    }
}