<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hobi;

class Hobi extends Model
{
    public function hobis()
    {
        return $this->belongsToMany(Hobi::class, 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');

    }
    
    protected $fillable = ['nama_hobi'];
     public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_hobi', 'id_hobi', 'id_mahasiswa');
    }
}
