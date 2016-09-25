<?php

namespace App\Http\Controllers;

Use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('blog.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.show', compact('post'));
    }
}
