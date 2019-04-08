<?php

use Illuminate\Database\Seeder;
use App\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$data = [

    		['kode_jabatan'=>'001',
    		 'nama_jabatan'=>'Directur',
    		 'tunjangan_jabatan'=>'10000000',
    		 'level_jabatan'=>'1'],

    		 ['kode_jabatan'=>'002',
    		 'nama_jabatan'=>'Manager',
    		 'tunjangan_jabatan'=>'8000000',
    		 'level_jabatan'=>'2'],

    		 ['kode_jabatan'=>'003',
    		 'nama_jabatan'=>'Assistent Manager',
    		 'tunjangan_jabatan'=>'7500000',
    		 'level_jabatan'=>'3'],

    		 ['kode_jabatan'=>'004',
    		 'nama_jabatan'=>'Staff',
    		 'tunjangan_jabatan'=>'5000000',
    		 'level_jabatan'=>'4'],

    		 ['kode_jabatan'=>'005',
    		 'nama_jabatan'=>'HRD',
    		 'tunjangan_jabatan'=>'5000000',
    		 'level_jabatan'=>'5'],

    	];

    	Jabatan::insert($data);

    }
}
