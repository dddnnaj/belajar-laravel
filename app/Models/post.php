<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //secara otomatis model ini mengangap
    //tabel yang di gunakan adalah table 'posts'
    
    //table yang di gunakan untuk model ini adalah table 'post'
    // protected $table = 'post';
    
    //apa saja yang boleh di isi
    public $fillable = ['title','content'];

    //apa sajaa yang boleh di tampilkan 
    public $visible = ['id','title','content'];

    //mengisi tanggal kapan di buat dan kapan di update secara otomatis
    public $timestamps = true;
}
