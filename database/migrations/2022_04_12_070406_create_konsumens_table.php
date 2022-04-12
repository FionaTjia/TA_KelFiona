<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_konsumen')->length(11)->unique();
            $table->string('nama_konsumen')->length(100)->nullable();
            $table->string('hp_konsumen')->length(16)->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('konsumens');
    }
}
