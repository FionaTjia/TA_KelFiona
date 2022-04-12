<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_produk')->length(11)->unique();
            $table->string('nama_produk')->length(100)->nullable();
            $table->string('hargaJual_produk')->length(100)->nullable();
            $table->string('modal_produk')->length(100)->nullable();
            $table->string('product_id_category')->length(11);

            $table->foreign('product_id_category')->references('id_category')->on('categories');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produks');
    }
}
