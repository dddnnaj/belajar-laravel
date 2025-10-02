<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class bukutableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $buku = [
            ['jenis buku'=> 'ipa', 'jumlah halaman'=> '10', 'harga'=> '50Rb', 'stok'=>'11', 'tema'=>'organ'],
            ['jenis buku' => 'novel', 'jumlah halaman' => '188', 'harga' => '80Rb', 'stok' => '100', 'tema' => 'buyahamka'],
            ['judul buku' => 'komik', 'jumlah halaman' => '1000', 'harga' => '100Rb', 'stok' => '76', 'tema' => 'naruto'],
            ['judul buku' => 'cerpen', 'jumlah halaman' => '100', 'harga' => '10Rb', 'stok' => '7', 'tema' => 'sidik'],
            ['judul buku' => 'ips', 'jumlah halaman' => '155', 'harga' => '70Rb', 'stok' => '9', 'tema' => 'tumbuhan']

        ];

        DB::table('buku')->insert($buku);
    }
}
