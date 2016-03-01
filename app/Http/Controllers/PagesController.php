<?php

namespace Gurustudent\Http\Controllers;

use Gurustudent\Models\User;
use Gurustudent\Models\Post;
use Auth;
use Gurustudent\Http\Controllers\Controller;

class PagesController extends Controller {
    public function showIndex() {

        if(Auth::check()) {
            $posts = Post::notReply()->where(function ($query) {
                return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

            return view('pages.home')->with('posts', $posts);
        }
        else {
            return view('pages.home');
        }
    }

    public function showContact() {
    	return view('pages.contact');
    }

    public function showAsk() {
    	return view('pages.ask');
    }
}
