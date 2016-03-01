<?php

namespace Gurustudent\Http\Controllers\Posts;

use Auth;
use Gurustudent\Models\Post;
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

    public function showQuestion($id)
    {
        $posts = Post::notReply()->findOrFail($id);
        return view('post.show', compact('posts'));
    }

    public function postReply(Request $request, $id)
    {
        $this->validate($request, [
            'reply' => 'required|max:10000',
        ]);

        $posts = Post::notReply()->find($id);

        if (!$posts) {
            return redirect()->route('home')->with('danger', 'Parent post not found.');
        }

        $reply = Post::create([
            'body' => $request->input("reply"), 
        ])->author()->associate(Auth::user());

        $posts->replies()->save($reply);

        return redirect()->back();
    }
}