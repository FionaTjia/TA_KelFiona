<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('stok_id_produk')->length(11)->nullable();
            $table->string('stok')->length(100)->nullable();

            $table->foreign('stok_id_produk')->references('id_produk')->on('produks');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stoks');
    }
}
