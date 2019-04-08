<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $fillable = ['kode_departemen','nama_departemen'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_departemen');
    }
}
