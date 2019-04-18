<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Karyawan extends Model
{
    protected $fillable = ['nomor_induk','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','status_pernikahan','jumlah_anak','tunjangan_keluarga','alamat','nomor_telepon','pendidikan_terakhir','kode_jabatan','kode_divisi','kode_departemen','gaji_pokok','tanggal_diangkat','nama_bank','nomor_rekening','rekening_atas_nama'];

    public function Gaji()
    {
        return $this->hasMany('App\Gaji', 'karyawan_id');
    }

    public function Jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'kode_jabatan');
    }

    public function Departemen()
    {
        return $this->belongsTo('App\Departemen', 'kode_departemen');
    }

    public function Divisi()
    {
        return $this->belongsTo('App\Divisi', 'kode_divisi');
    }

    public static function boot()
    {
        parent::boot();

        self::deleting(function ($karyawan){

            if($karyawan->Gaji->count() > 0 ){

                $html = 'Hapus Data Gaji Terlebih Dahulu.';
                Session::flash("flash_notification", [
                    "level"=>"danger",
                    "message"=>$html
                ]);

                return false;

            }else{
                Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil menghapus Karyawan"
                ]);
            }

        });
    }

    public function Cuti()
    {
        return $this->hasMany('App\Cuti', 'nomor_induk');
    }
}
