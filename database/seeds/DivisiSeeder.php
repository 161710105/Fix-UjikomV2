<?php

use Illuminate\Database\Seeder;
use App\Divisi;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$data = [

        	 ['kode_divisi'=>'01001',
        	 'nama_divisi'=>'Non Divisi'],

        	 ['kode_divisi'=>'02002',
        	 'nama_divisi'=>'Production'],

        	 ['kode_divisi'=>'03003',
        	 'nama_divisi'=>'Human Resources Development'],

        	 ['kode_divisi'=>'04004',
        	 'nama_divisi'=>'Marketing and Customer Service'],

        	 ['kode_divisi'=>'05005',
        	 'nama_divisi'=>'Maintenance and Facility'],

        	 ['kode_divisi'=>'06006',
        	 'nama_divisi'=>'Environtment and Safety'],

        ];

        Divisi::insert($data);

    }
}
