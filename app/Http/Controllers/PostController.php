<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
   
    public function index()
    {
       $data['title'] = __("Posts HHHHH");
       //$data['posts'] = Post::all();
       //$data['posts'] = Post::where()->get();
       $data['posts'] = Post::paginate(2);
       return view('backend.pages.posts.index', $data);
    }

    
    public function create()
    {
        return view('backend.pages.posts.create');
    }

    
    public function store(PostRequest $request)
    {
         $post = new Post();
         $post->title = $request->title;
         $post->body  = $request->body;
         $post->save();

         return redirect()->route('posts.index');
    }

   
    public function show(Post $post)
    {
        //
    }

    
    public function edit(Post $post)
    {
        $data['post'] = $post;
        return view('backend.pages.posts.edit', $data);
    }

   
    public function update(Request $request, Post $post)
    {
        $request-> validate([
            'title' => 'required|max:255',
            'body'  => 'required',
        ]);
        $params = $request->only(['title','body']);
        if($post->update($params)){
            return redirect()->route('posts.index');
        }
    }

   
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
