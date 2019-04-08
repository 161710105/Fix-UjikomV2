<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    protected $fillable = ['nomor_induk','bulan','tahun','jumlah_jam_lembur','harga','total_uang_lembur'];

    public function Karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'nomor_induk');
    }
}
