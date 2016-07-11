<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class ArchiveController extends Controller
{
    public function displayAll($filter, $order) {
        $posts ="";
        if($filter == "date" && $order == "oldest_newest") {
            $posts = Post::orderBy('created_at', 'asc')->get();
         } else if($filter == "date" && $order == "newest_oldest") {
            $posts = Post::orderBy('created_at', 'desc')->get();
         } else if($filter == "popularity" && $order == "most") {
         	$posts = Post::orderBy('popularity', 'desc')->get();
         } else if($filter == "popularity" && $order == "least") {
         	$posts = Post::orderBy('popularity', 'asc')->get();
         } else if($filter == "title") {
            $posts = Post::whereRaw("`title` LIKE '%" . $order . "%' ")->get();
         } else if($filter == "tags") {
            $posts = Post::whereRaw("`tags` LIKE '%" . $order . "%' ")->get();
         }
    	return view('archive', compact('posts'), ['filter' => $filter, 'order' => $order]);
    }
}
