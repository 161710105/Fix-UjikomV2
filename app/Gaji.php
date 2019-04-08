<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $fillable = ['karyawan_id','bulan','tahun','gaji_pokok','tunjangan_jabatan','tunjangan_keluarga','persen_pot_pph','persen_pot_jamsostek','jabatan','divisi','departemen','nama_bank','nomor_rekening','rekening_atas_nama','total_gaji'];

    public function Karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'karyawan_id');
    }
}
