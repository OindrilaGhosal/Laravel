<?php

namespace App\Http\Controllers;
//use App\Post;
class PostsController extends Controller
{
    public function show($slug)
    {
    
    $post = \DB::table('posts')->where('slug', $slug)->first();

//dd($post);      
        return view ('post', [
            'post' => $post
            ]); 
      
    }
}
?>