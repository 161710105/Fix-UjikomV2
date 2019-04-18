<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Jabatan extends Model
{
    protected $fillable = ['kode_jabatan','nama_jabatan','tunjangan_jabatan','level_jabatan'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_jabatan');
    }

    public static function boot()
    {
    	parent::boot();

    	self::deleting(function ($jabatan){

    		if($jabatan->Karyawan->count() > 0 ){

    			$html = 'Hapus Data Karyawan Terlebih Dahulu.';
    			Session::flash("flash_notification", [
    				"level"=>"danger",
    				"message"=>$html
    			]);

    			return false;

    		}else{
                Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil menghapus Jabatan"
        ]);
            }

    	});
    }
}
