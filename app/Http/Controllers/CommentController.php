<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CommentFormRequest;
use App\Comment;
use App\Post;
use Auth;


class CommentController extends Controller
{
    public function create(CommentFormRequest $request, $title) {


    	 if ($request->user()) {
    	 	$post = Post::whereTitle($title)->firstOrFail();

			$comment = new Comment(array(
	    		'comment' => $request->get('comment'),
	    		'user_id' => Auth::user()->id,
	    		'belongs_to' => $post->id
	    	));

    		$comment->save();
        }

	    return redirect('/');
    }
}
