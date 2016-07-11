<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    public function index($page = 1)
	{
	    $posts = Post::orderBy('created_at', 'desc')->get();
	    $totalPosts = count($posts);

	    return view('welcome', compact('posts', 'totalPosts', 'page'));
	}

	public function show($title)
	{
		$post = Post::where('url_title', $title)->firstOrFail();
	    return view('posts.show', compact('post'));
	}
}
