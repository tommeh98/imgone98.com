<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use DB;

class TagController extends Controller
{
    //

   /* public function display($id) {
    	$tags = [];

	    $previousSpaceLocation = 0;
	    $nextSpaceLocation = 0;

	    $tagResults = DB::filter('filter * from posts where id = ' . $id);
	   // $tagsConnected = $request->get('tags') . ' ';
	    for ($i=0; $i<strlen($tags); $i++) {
	    	if($tagResults[$i] == ' '){
	    		$nextSpaceLocation = $i;
	    		$tag = substr($tagResults, $previousSpaceLocation, $nextSpaceLocation-$previousSpaceLocation);

	    		?> 
	    			<a href=""> <?php $tag ?>  </a>
	    		<?php


		    	$previousSpaceLocation = $i;
	    	}
		}
    } */

    public function displayAll($filter, $order) {
    	/* Take filter type and use value to filter that value using filter
    	EX: Filter type: date
    		Value: Actual date

    		Filter type: Tags
    		Value: Tags to seach with

    	*/
        $posts = Post::all();

        if($filter == "date" && $order == "oldest_newest") {
            $posts = Post::orderBy('created_at', 'asc')->get();
         } else if($filter == "date" && $order == "newest_oldest") {
            $posts = Post::orderBy('created_at', 'desc')->get();
         } else if($filter == "title" && $order == "popularity") {

         } else if($filter == "tags" && $order == "popularity") {
            
         }
       

    	return view('archive', compact('posts'), ['filter' => $filter, 'order' => $order]);

    }

    public function filterPosts($filter, $order, $search) {
        $posts = Post::all();

        return view('archive', compact('posts'), ['filter' => $filter, 'order' => $order]);
    }
}
