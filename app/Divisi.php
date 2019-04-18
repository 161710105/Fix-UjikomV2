<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Divisi extends Model
{
    protected $fillable = ['kode_divisi','nama_divisi'];

    public function Karyawan()
    {
    	return $this->hasMany('App\Karyawan', 'kode_divisi');
    }

    public static function boot()
    {
    	parent::boot();

    	self::deleting(function ($divisi){

    		if($divisi->Karyawan->count() > 0 ){

    			$html = 'Hapus Data Karyawan Terlebih Dahulu.';
    			Session::flash("flash_notification", [
    				"level"=>"danger",
    				"message"=>$html
    			]);

    			return false;

    		}else{
                Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil menghapus Divisi"
                ]);
            }

    	});
    }
}
