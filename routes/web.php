<?php

use Illuminate\Support\Facades\Route;

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
        ['barang'=>'bala bala','harga'=>1000,'qty'=>10],
        ['barang'=>'gehu pedas','harga'=>2000,'qty'=>15],
        ['barang'=>'cireng isi ayam','harga'=> 2500,'qty'=>5],
    ];
    $resto = "resto MPL - makanan penuh lemak";


    return view('menu', compact('data','resto'));

});

//route parameter
Route::get('books/{judul}', function () {
    return 'judul buku:' .$a;
});

//compact assosiatif
Route::get('nilai/{title}/{category}', function($a, $b){
    return view('nilai',['judul' =>$a, 'cat' =>$b]);
});

//route optional parameter
//di tandai dengan?
Route::get('profile/{nama?}', function ($a = " guest") {
    return 'halo nama saya' . $a;
});




Route::get('order/{item}', function ($a = "nasi") {
    return view('order',compact('a'));
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
    return view('nilai', ['nama'  => $a, 'mapel' => $b,'nilai'=>$c]);
});



Route::get('grading/{nama}/{nilai}', function ($a = "guest", $b = 0) {
    return view('grading', ['nama' => $a, 'nilai' => $b]);
});


Route::get('kelas/{nama}/{nilai}', function ($a = "guest", $b = 0) {
    return view('kelas', ['nama' => $a, 'nilai' => $b]);
});




