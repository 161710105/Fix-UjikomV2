<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['kode_jabatan','nama_jabatan','tunjangan_jabatan','level_jabatan'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_jabatan');
    }
}
