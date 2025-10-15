<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;

// routes/web.php
use App\Http\Controllers\RelasiController;

// routes/web.php
use App\Models\Mahasiswa;

// routes/web.php
use App\Models\Hobi;








Route::get('/', function () {
    return view('welcome');
});

//basic
Route::get('about', function () {

    return '<h1>hallo</h1>' .
        '<br>selamat datang di perpustakaan digital';
});

Route::get('about', function () {

    return '<h1>halo</h1>' .
        '<br>dadan,kelas 11 rpl 3,alamat rancamanyar,umur 16';
});

Route::get('buku', function () {

    return '<h1>ini buku saya</h1>';
});

Route::get('menu', function () {
    $data = [
        ['barang' => 'bala bala', 'harga' => 1000, 'qty' => 10],
        ['barang' => 'gehu pedas', 'harga' => 2000, 'qty' => 15],
        ['barang' => 'cireng isi ayam', 'harga' => 2500, 'qty' => 5],
    ];
    $resto = "resto MPL - makanan penuh lemak";

    return view('menu', compact('data', 'resto'));

});

//route parameter
Route::get('books/{judul}', function () {
    return 'judul buku:' . $a;
});

//compact assosiatif
// Route::get('nilai/{title}/{category}', function ($a, $b) {
//     return view('nilai', ['judul' => $a, 'cat' => $b]);
// });

//route optional parameter
//di tandai dengan?
Route::get('profile/{nama?}', function ($a = " guest") {
    return 'halo nama saya' . $a;
});

Route::get('order/{item}', function ($a = "nasi") {
    return view('order', compact('a'));
});

//tugas
Route::get('potokopi', function () {
    $data = [
        ['barang' => 'buku', 'harga' => 15000, 'qty' => 2],
        ['barang' => 'pensil', 'harga' => 2000, 'qty' => 5],
        ['barang' => 'pengaris', 'harga' => 7000, 'qty' => 1],
    ];
    $potokopi = "poto kopi";

    return view('potokopi', compact('data', 'potokopi'));

});

Route::get('nilai/{nama}/{mapel}/{nilai}', function ($a, $b, $c) {
    return view('nilai', ['nama' => $a, 'mapel' => $b, 'nilai' => $c]);
});

Route::get('grading/{nama}/{nilai}', function ($a = "guest", $b = 0) {
    return view('grading', ['nama' => $a, 'nilai' => $b]);
});

Route::get('kelas/{nama}/{nilai}', function ($a = "guest", $b = 0) {
    return view('kelas', ['nama' => $a, 'nilai' => $b]);
});

//test model
Route::get('test-model', function () {
    //menampilkan semua data dari model post
    $data = App\Models\post::all();

    return $data;
});

Route::get('create-data', function () {
    //membuat data baru melalui model
    $data = App\Models\post::create([
        'title'   => 'tukang rujak',
        'content' => 'lorem ipsum',
    ]);
    return $data;
});

Route::get('show-data/{id}', function ($id) {
    //menampilkan data berdasarkan parameter 'id'
    $data = App\Models\post::find($id);
    return $data;
});

Route::get('edit-data/{id}', function ($id) {
    //mengupdate data berdaar kan id
    $data        = App\Models\post::find($id);
    $data->title = "membangun projek dengan laravel";
    $data->save();
    return $data;
});

Route::get('delete-data/{id}', function ($id) {
    //menghapus data berdasarkan patameter id
    $data = App\Models\post::fint($id);
    $data->delete();
    // di kembalikan ke halaman test model
    return redirect('test-model');
});

Route::get('search/{cari}', function ($query) {
    // mencari data berdasarkan titlr yang mirip seperti (like) .....
    $data = App\Models\Post::where('title', 'like', '%' . $query . '%')->get();
    return $data;
});


//pemangilan url menggunakan controller

Route::get('greetings',[MyController::class, 'hello']);
Route::get('student',[MyController::class, 'siswa']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//post
Route::get('post', [PostController::class, 'index'])->name('post.index');
//tambah data post
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
//edit data post
Route::get('post/{id}/edit', [PostController::class,'edit'])->name('post.edit');
Route::put('post/{id}', [PostController::class, 'update'])->name('post.update');

// show data
Route::get('post/{id}', [PostController::class, 'show'])->name('post.show');


//hapus data 
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.delete');


// produk
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');


use App\Http\Controllers\BiodataController;Route::resource('biodata', BiodataController::class);

Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);


// routes/web.php
use App\Models\Wali;

Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});


Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);


Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);



Route::get('/hobi/bola', function () {
    $hobi = Hobi::where('nama_hobi', 'Bermain Bola')->first();
    foreach ($hobi->mahasiswas as $mhs) {
        echo $mhs->nama . '<br>';
    }
});




Route::get('eloquent', [RelasiController::class, 'eloquent']);

Route::resource('dosen', App\Http\Controllers\DosenController::class)->middleware('auth');

Route::resource('hobi', App\Http\Controllers\HobiController::class)->middleware('auth');


