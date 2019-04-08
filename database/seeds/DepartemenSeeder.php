<?php

use Illuminate\Database\Seeder;
use App\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	 ['kode_departemen'=>'01',
        	 'nama_departemen'=>'Non Departemen'],

        	 ['kode_departemen'=>'02',
        	 'nama_departemen'=>'Production'],

        	 ['kode_departemen'=>'03',
        	 'nama_departemen'=>'Human Resources Development'],

        	 ['kode_departemen'=>'04',
        	 'nama_departemen'=>'Marketing and Customer Service'],

        	 ['kode_departemen'=>'05',
        	 'nama_departemen'=>'Maintenance and Facility'],

        	 ['kode_departemen'=>'06',
        	 'nama_departemen'=>'Environtment and Safety'],

        ];

        Departemen::insert($data);
    }
}
