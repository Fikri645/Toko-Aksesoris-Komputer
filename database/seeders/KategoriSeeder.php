<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            'nama' => 'Mouse',
            'gambar' => 'mouse.png',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Keyboard',
            'gambar' => 'keyboard.png',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Headset',
            'gambar' => 'headset.png',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Mousepad',
            'gambar' => 'mousepad.png',
        ]);

    }
}
