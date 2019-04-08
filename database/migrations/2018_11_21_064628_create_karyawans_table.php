<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_induk');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('status_pernikahan');
            $table->integer('jumlah_anak');
            $table->integer('tunjangan_keluarga');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('pendidikan_terakhir');
            $table->integer('kode_jabatan')->unsigned();
            $table->foreign('kode_jabatan')->references('id')->on('jabatans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_departemen')->unsigned();
            $table->foreign('kode_departemen')->references('id')->on('departemens')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kode_divisi')->unsigned();
            $table->foreign('kode_divisi')->references('id')->on('divisis')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('gaji_pokok');
            $table->date('tanggal_diangkat');
            $table->date('tanggal_keluar');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('rekening_atas_nama');
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
        Schema::dropIfExists('karyawans');
    }
}
