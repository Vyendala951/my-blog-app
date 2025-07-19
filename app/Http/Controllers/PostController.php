<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.form', ['post' => new Post]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.form', compact('post'));
    }

    public function storeOrUpdate(Request $req)
    {
        $data = $req->validate([
          'title'     => 'required|string|max:50',
          'content'   => 'nullable|string',
          'is_active' => 'required|in:Yes,No',
        ]);

        Post::updateOrCreate(
          ['id' => $req->input('id')],
          $data
        );

        return redirect()->route('posts.index')
                         ->with('success','Post saved successfully.');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index')
                         ->with('success','Post deleted successfully.');
    }
}

