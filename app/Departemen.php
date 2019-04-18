<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Departemen extends Model
{
    protected $fillable = ['kode_departemen','nama_departemen'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_departemen');
    }

    public static function boot()
    {
    	parent::boot();

    	self::deleting(function ($departemen){

    		if($departemen->Karyawan->count() > 0 ){

    			$html = 'Hapus Data Karyawan Terlebih Dahulu.';
    			Session::flash("flash_notification", [
    				"level"=>"danger",
    				"message"=>$html
    			]);

    			return false;

    		}else{
                Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil menghapus Departemen"
                ]);
            }

    	});
    }
}
