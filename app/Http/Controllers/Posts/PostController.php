<?php

namespace Gurustudent\Http\Controllers\Posts;

use Gurustudent\Models\User;
use Auth;
use Gurustudent\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postQuestion(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:140',
            'body' => 'required|max:1500',
        ]);

        Auth::user()->posts()->create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return redirect()->route('home')->with('info', 'Question posted.');
    }
}