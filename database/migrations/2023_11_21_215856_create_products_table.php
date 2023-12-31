<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(1000);
            $table->boolean('is_ready')->default(true);
            $table->string('gambar')->default('https://via.placeholder.com/150');
            $table->string('merek')->default('Tidak ada merek');
            $table->text('deskripsi')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum?');
            $table->integer('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
