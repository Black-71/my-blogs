<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }
    public function create()
{
    return view('create'); // This will load create.blade.php
}

public function store(Request $request)
{
    // Validate input
    $request->validate([
        'title' => 'required',
        'body' => 'required',
    ]);

    // Create and save post
    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();

    // Redirect to /posts with success message
    return redirect('/posts')->with('success', 'Post created successfully!');
}
public function edit($id)
{
    $post = Post::FindOrFail($id);
    return view('edit' , compact('post'));
}
public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();

    return redirect('/posts')->with('success', 'Post updated successfully!');
}
public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect('/posts')->with('success', 'Post deleted successfully!');
}

}
