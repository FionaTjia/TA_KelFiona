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
            $table->string('id_stok')->length(11)->unique();
            $table->string('stok_id_produk')->length(11);
            $table->string('stok')->length(1000);

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
