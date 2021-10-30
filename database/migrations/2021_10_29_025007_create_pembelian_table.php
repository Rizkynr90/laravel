<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
        //  $table->unsignedBigInteger('id_barang');
        //  $table->foreign('id_barang')->references('id')->on('barang');
            $table->string('nama_barang');
        //  $table->unsignedBigInteger('id_suplier');
        //  $table->foreign('id_suplier')->references('id')->on('suplier');
            $table->string('nama_suplier');
            $table->integer('qty');
            $table->date('tgl');
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
        Schema::dropIfExists('pembelian');
    }
}
