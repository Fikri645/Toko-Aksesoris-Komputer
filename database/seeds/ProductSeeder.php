<?php

use App\Product;
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
        $productData = [
            [
                'nama' => 'Mouse Logitech G102',
                'Merek' => 'Logitech',
                'gambar' => 'logitechg102.png',
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Keyboard Logitech G213',
                'Merek' => 'Logitech',
                'is_ready' => 0, 
                'gambar' => 'logitechg213.png',
                'kategori_id' => 2,
            ],
            [
                'nama' => 'Headset Logitech G231',
                'Merek' => 'Logitech',
                'gambar' => 'logitechg231.png',
                'kategori_id' => 3,
            ],
            [
                'nama' => 'Mousepad Logitech G240',
                'Merek' => 'Logitech',
                'gambar' => 'logitechg240.png',
                'kategori_id' => 4,
            ],
            [
                'nama' => 'Mouse Razer Deathadder V2',
                'Merek' => 'Razer',
                'is_ready' => 0, 
                'gambar' => 'razerdeathadderv2.png',
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Keyboard Razer Blackwidow V3',
                'Merek' => 'Razer',
                'gambar' => 'razerblackwidowv3.png',
                'kategori_id' => 2,
            ],
            [
                'nama' => 'Headset Razer Kraken X',
                'Merek' => 'Razer',
                'is_ready' => 0, 
                'gambar' => 'razerkrakenx.png',
                'kategori_id' => 3,
            ],
            [
                'nama' => 'Mousepad Razer Goliathus',
                'Merek' => 'Razer',
                'gambar' => 'razergoliathus.png',
                'kategori_id' => 4,
            ],
            [
                'nama' => 'Mouse Steelseries Rival 3',
                'Merek' => 'Steelseries',
                'gambar' => 'steelseriesrival3.png',
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Keyboard Steelseries Apex 3',
                'Merek' => 'Steelseries',
                'gambar' => 'steelseriesapex3.png',
                'kategori_id' => 2,
            ],
            [
                'nama' => 'Headset Steelseries Arctis 3',
                'Merek' => 'Steelseries',
                'gambar' => 'steelseriesarctis3.png',
                'kategori_id' => 3,
            ],
            [
                'nama' => 'Mousepad Steelseries QCK',
                'Merek' => 'Steelseries',
                'gambar' => 'steelseriesqck.png',
                'kategori_id' => 4,
            ]
        ];

        foreach ($productData as $key => $val) {
            Product::create($val);
        }
    }
}
