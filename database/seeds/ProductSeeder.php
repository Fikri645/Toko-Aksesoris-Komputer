<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Mouse Logitech G102',
            'Merek' => 'Logitech',
            'gambar' => 'logitechg102.png',
            'kategori_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama' => 'Keyboard Logitech G213',
            'Merek' => 'Logitech',
            'gambar' => 'logitechg213.png',
            'kategori_id' => 2,
        ]);
        DB::table('products')->insert([
            'nama' => 'Headset Logitech G231',
            'Merek' => 'Logitech',
            'gambar' => 'logitechg231.png',
            'kategori_id' => 3,
        ]);
        DB::table('products')->insert([
            'nama' => 'Mousepad Logitech G240',
            'Merek' => 'Logitech',
            'gambar' => 'logitechg240.png',
            'kategori_id' => 4,
        ]);
        DB::table('products')->insert([
            'nama' => 'Mouse Razer Deathadder V2',
            'Merek' => 'Razer',
            'gambar' => 'razerdeathadderv2.png',
            'kategori_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama' => 'Keyboard Razer Blackwidow V3',
            'Merek' => 'Razer',
            'gambar' => 'razerblackwidowv3.png',
            'kategori_id' => 2,
        ]);
        DB::table('products')->insert([
            'nama' => 'Headset Razer Kraken X',
            'Merek' => 'Razer',
            'gambar' => 'razerkrakenx.png',
            'kategori_id' => 3,
        ]);
        DB::table('products')->insert([
            'nama' => 'Mousepad Razer Goliathus',
            'Merek' => 'Razer',
            'gambar' => 'razergoliathus.png',
            'kategori_id' => 4,
        ]);
        DB::table('products')->insert([
            'nama' => 'Mouse Steelseries Rival 3',
            'Merek' => 'Steelseries',
            'gambar' => 'steelseriesrival3.png',
            'kategori_id' => 1,
        ]);
        DB::table('products')->insert([
            'nama' => 'Keyboard Steelseries Apex 3',
            'Merek' => 'Steelseries',
            'gambar' => 'steelseriesapex3.png',
            'kategori_id' => 2,
        ]);
        DB::table('products')->insert([
            'nama' => 'Headset Steelseries Arctis 3',
            'Merek' => 'Steelseries',
            'gambar' => 'steelseriesarctis3.png',
            'kategori_id' => 3,
        ]);
        DB::table('products')->insert([
            'nama' => 'Mousepad Steelseries QCK',
            'Merek' => 'Steelseries',
            'gambar' => 'steelseriesqck.png',
            'kategori_id' => 4,
        ]);
    }
}
