<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_induk')->unsigned();
            $table->foreign('nomor_induk')->references('id')->on('karyawans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('bulan');
            $table->integer('tahun');
            $table->integer('jumlah_cuti');
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
        Schema::dropIfExists('cutis');
    }
}
