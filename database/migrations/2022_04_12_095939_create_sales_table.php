<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_sales')->length(11)->unique();
            $table->string('id_produk')->nullable();
            $table->string('id_konsumen')->nullable();
            $table->string('jumlah_sales')->nullable();
            $table->string('total_harga_sales')->nullable();

            $table->foreign('id_produk')->references('id_produk')->on('produks');
            $table->foreign('id_konsumen')->references('id_konsumen')->on('konsumens');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
