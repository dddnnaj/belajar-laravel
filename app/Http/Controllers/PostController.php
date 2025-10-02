<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
// import model post

class PostController extends Controller
{
    public function index ()
    {
        //menampilkan semua data dari model post
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}
