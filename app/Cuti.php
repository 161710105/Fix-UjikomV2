<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $fillable = ['nomor_induk','bulan','tahun','jumlah_cuti'];

    public function Karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'nomor_induk');
    }
}
