<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(PostRequest $request){
        $post = new Post;
        $post->title = $request->title;
        $post->slug = create_slug($request->title);
        $post->content = $request->content;
        $post->highlight = $request->highlight;
        $post->view = '0';
        $post->category_id = $request->category_id;

        if($request->hasFile('thumb_img')){
            $file = $request->file('thumb_img');

            $file_name_client = $file->getClientOriginalName();
            $file_name_server = str_random(4)."-".$file_name_client;
            while(file_exists("resources/upload/posts/".$file_name_server)){
                $file_name_server = str_random(4)."-".$file_name_client;
            }

            $file_extension = $file->getClientOriginalExtension();
            if($file_extension != 'jpg' && $file_extension != 'png' && $file_extension != 'jpeg'){
                return redirect()->route('admin.posts.create')->with('error_message',"Only accept file JPG, PNG, JPEG");
            }
            $file->move("resources/upload/posts", $file_name_server);
            $post->thumb_img = $file_name_server;
        } else {
            $post->thumb_img = "";
        }
        $post->save();
        return redirect()->route('admin.posts.index')->with('notification_success', "Create post successfully!");
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('post','categories'));
    }

    public function update(PostRequest $request, $id){
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug = create_slug($request->title);
        $post->content = $request->content;
        $post->highlight = $request->highlight;
        $post->category_id = $request->category_id;

        if($request->hasFile('thumb_img')){
            $file = $request->file('thumb_img');

            $file_name_client = $file->getClientOriginalName();
            $file_name_server = str_random(4)."-".$file_name_client;//file save on server
            while(file_exists("resources/upload/posts/".$file_name_server)){
                $file_name_server = str_random(4)."-".$file_name_client;
            }

            $file_extension = $file->getClientOriginalExtension();
            if($file_extension != 'jpg' && $file_extension != 'png' && $file_extension != 'jpeg'){
                return redirect()->route('admin.posts.edit', ['id'=>$id])->with('error_message',"Only accept file JPG, PNG, JPEG");
            }
            $file->move('resources/upload/posts', $file_name_server);
            unlink('resources/upload/posts/'.$post->thumb_img);//remove file previous
            $post->thumb_img = $file_name_server;
        } 
        $post->save();
        return redirect()->route('admin.posts.index')->with('notification_success',"Update post successfully");
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts.index')->with('notification_success','Delete post successfully!');
    }
}
