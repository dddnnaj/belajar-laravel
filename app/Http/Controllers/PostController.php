<?php

namespace App\Http\Controllers;
//import model post
use Illuminate\Http\Request;
// import model post
use App\Models\Post;


class PostController extends Controller
{

    // beri middlewere 'auth' untuk mengecek sudah login atau belum
    public function __construct()
    {
        $this->middleware('auth');
    }

    // daftar post
    public function index ()
    {
        //menampilkan semua data dari model post
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    // menampilkan halaman from create
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // membuat data baru untuk table 'posts'
        // melalui mode post
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save(); // disimpan ke db
        return redirect()->route('post.index');
    }
       // menampilkan data  berdasarkan parameter id
       public function show($id)
       {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));

       }

    //mencari data post berdasarkan parameter 'id'
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        // mancari data post berdasarkan parameter 'id'
        $post          = Post::findOrFail($id);
        $post->title   = $request->title;
        $post->content = $request->content;
        $post->save(); // disimpan ke db
        // di alihkan ke halaman post melalui route post.index
        return redirect()->route('post.index');

    }


    public function destroy($id)
    {
        // mencari data post berdasarkan parameter 'id'
        $post = Post::findOrFail($id);
        $post->delete(); // setelah data di temukan kemudian di delete
        return redirect()->route('post.index');
    }
}
