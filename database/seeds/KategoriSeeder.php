<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama' => 'Mouse',
            'gambar' => 'mouse.jpg',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Keyboard',
            'gambar' => 'keyboard.jpg',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Headset',
            'gambar' => 'headset.jpg',
        ]);
        DB::table('kategoris')->insert([
            'nama' => 'Mousepad',
            'gambar' => 'mousepad.jpg',
        ]);
    }
}
