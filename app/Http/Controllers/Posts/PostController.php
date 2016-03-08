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
            'title' => 'required|max:255',
            'body' => 'required|max:15000',
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
            'reply' => 'required|max:15000',
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

    public function getLike($id)
    {
        $posts = Post::find($id);

        if (!$posts) {
            return redirect()->route('home')->with('danger', 'That status does not exist.');
        }

        if (Auth::user()->hasLikedPost($posts)) {
            return redirect()->back();
        }

        $like = $posts->likes()->create([]);
        Auth::user()->likes()->save($like);

        return redirect()->back();
    }

    public function deletePostOrReply($id)
    {
        $posts = Post::find($id);

        if (!$posts) {
            return redirect()->back()->with('danger', 'That post does not exist.');
        } else {
            $posts->delete();
            return redirect()->back()->with('info', 'Post has been deleted.');
        }
    }
}