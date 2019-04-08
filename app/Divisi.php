<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $fillable = ['kode_divisi','nama_divisi'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_divisi');
    }
}
