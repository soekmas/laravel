<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        
    return view('post',[
        "title" => "Blog",
        "posts" => post::all()
    ]);
    }

    public function show(post $post){      
    return view('posts',[
        "title" => "Post",
        "post" => $post
    ]);
    }
}
