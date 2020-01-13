<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->Incremnets('kd_produk');
            $table->unsignedInteger('kd_kategori');
            $table->foreign('kd_kategori')->references('kd_kategori')->on('kategori');
            $table->string('nama_produk', 255);
            $table->integer('harga');
            $table->string('gambar_produk', 255);
            $table->integer('stok');
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
        Schema::table('produk', function(Blueprint $table){
            $table->dropForeign(['kd_kategori']);
        });

        Schema::dropIfExists('produk');
    }
}
