<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use App\Post;
use App\Comment;

class HomeController extends Controller
{
    public function index() {
    	$list_posts = Post::all();
    	$popular_posts = $list_posts->sortByDesc('view')->sortByDesc('id')->take(5);
    	// $popular_posts = Post::orderBy('view','desc')->get(); query builder
    	$latest_posts = $list_posts->sortByDesc('id')->take(3);
    	return view('pages.home', compact('popular_posts', 'latest_posts'));
    }

    public function show($id) {
    	// $post = Post::findOrFail($id);
     //    $comments = $post->comments()->get();
     //    $a = '';
     //    $b = show_comments_recursion($comments,0,$a);
     //    echo $b;
        echo '123';
    	// return view('pages.show_post', compact('post'));
    }
}
