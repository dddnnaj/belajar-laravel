<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// import package
use DB;

class posttableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //hapus sample data baru
        DB::table('posts')->delete();
        // buat sample data baru

        $post = [
            ['title'=> 'belajar laravel', 'content'=> 'lorem ipsum'],
            ['title'=> 'tips belajar laravel', 'content'=> 'lorem ipsum'],
            ['title'=> 'jadwal latihan workout bulanan', 'content'=> 'lorem ipsum']
        ];

        DB::table('posts')->insert($post);
    }
}
