<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLembursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemburs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_induk')->unsigned();
            $table->foreign('nomor_induk')->references('id')->on('karyawans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('bulan');
            $table->integer('tahun');
            $table->integer('jumlah_jam_lembur');
            $table->integer('harga');
            $table->integer('total_uang_lembur');
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
        Schema::dropIfExists('lemburs');
    }
}
