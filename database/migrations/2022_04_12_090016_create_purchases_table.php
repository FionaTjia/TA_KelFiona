<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_purchase')->length(11)->unique();
            $table->string('jumlah_purchase')->length(1000);
            $table->string('harga')->length(10000)->nullable();
            $table->string('id_produk')->length(11);
            $table->string('id_supplier')->length(11);

            $table->foreign('id_produk')->references('id_produk')->on('produks');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('purchases');
    }
}
