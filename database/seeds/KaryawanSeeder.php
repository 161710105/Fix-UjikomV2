<?php

use Illuminate\Database\Seeder;
use App\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

    		['nomor_induk'=>'161710101',
    		 'nama'=>'Diki Wahyudin',
    		 'tempat_lahir'=>'Tasikmalaya',
    		 'tanggal_lahir'=>'1998-01-03',
    		 'jenis_kelamin'=>'Laki-laki',
    		 'agama'=>'Islam',
    		 'status_pernikahan'=>'Kawin',
    		 'jumlah_anak'=>'1',
    		 'tunjangan_keluarga'=>'250000',
    		 'alamat'=>'Kp. Sekeloa Kidul RT 03/08 Ds. Margahayu Selatan Kec. Margahayu',
    		 'nomor_telepon'=>'085314155273',
    		 'pendidikan_terakhir'=>'S2',
    		 'kode_jabatan'=>'1',
    		 'kode_divisi'=>'1',
    		 'kode_departemen'=>'1',
    		 'gaji_pokok'=>'10000000',
    		 'tanggal_diangkat'=>'2018-01-01',
    		 'nama_bank'=>'BRI',
    		 'nomor_rekening'=>'42701007477501',
    		 'rekening_atas_nama'=>'Diki Wahyudin'],

    		 ['nomor_induk'=>'161710102',
    		 'nama'=>'Malik Fathurrohman',
    		 'tempat_lahir'=>'Bandung',
    		 'tanggal_lahir'=>'1999-02-01',
    		 'jenis_kelamin'=>'Laki-laki',
    		 'agama'=>'Islam',
    		 'status_pernikahan'=>'Kawin',
    		 'jumlah_anak'=>'1',
    		 'tunjangan_keluarga'=>'250000',
    		 'alamat'=>'Kp. Curugdogdog Ds. Sukamenak Kec. Margahayu',
    		 'nomor_telepon'=>'087667763125',
    		 'pendidikan_terakhir'=>'S1',
    		 'kode_jabatan'=>'2',
    		 'kode_divisi'=>'2',
    		 'kode_departemen'=>'2',
    		 'gaji_pokok'=>'8000000',
    		 'tanggal_diangkat'=>'2018-01-01',
    		 'nama_bank'=>'BCA',
    		 'nomor_rekening'=>'4480100432503',
    		 'rekening_atas_nama'=>'Malik Fathurrohman'],

    		 ['nomor_induk'=>'161710103',
    		 'nama'=>'Asep Saepul Rohmat',
    		 'tempat_lahir'=>'Majalengka',
    		 'tanggal_lahir'=>'1997-03-07',
    		 'jenis_kelamin'=>'Laki-laki',
    		 'agama'=>'Islam',
    		 'status_pernikahan'=>'Kawin',
    		 'jumlah_anak'=>'2',
    		 'tunjangan_keluarga'=>'500000',
    		 'alamat'=>'Kp. Hiu Macan Ds. Rancamanyar Kec. Dayeuhkolot',
    		 'nomor_telepon'=>'085675665431',
    		 'pendidikan_terakhir'=>'D3',
    		 'kode_jabatan'=>'3',
    		 'kode_divisi'=>'3',
    		 'kode_departemen'=>'3',
    		 'gaji_pokok'=>'7500000',
    		 'tanggal_diangkat'=>'2018-01-01',
    		 'nama_bank'=>'BCA',
    		 'nomor_rekening'=>'44801004376502',
    		 'rekening_atas_nama'=>'Asep'],

    		 ['nomor_induk'=>'161710104',
    		 'nama'=>'Melan Noerjanati',
    		 'tempat_lahir'=>'Bandung',
    		 'tanggal_lahir'=>'1999-09-010',
    		 'jenis_kelamin'=>'Perempuan',
    		 'agama'=>'Islam',
    		 'status_pernikahan'=>'Kawin',
    		 'jumlah_anak'=>'1',
    		 'tunjangan_keluarga'=>'250000',
    		 'alamat'=>'Kp. Bojong Citepus Ds. Cangkuang Wetan Kec. Dayeuhkolot',
    		 'nomor_telepon'=>'085777666435',
    		 'pendidikan_terakhir'=>'S1',
    		 'kode_jabatan'=>'5',
    		 'kode_divisi'=>'5',
    		 'kode_departemen'=>'5',
    		 'gaji_pokok'=>'5000000',
    		 'tanggal_diangkat'=>'2018-01-01',
    		 'nama_bank'=>'BRI',
    		 'nomor_rekening'=>'44801004374500',
    		 'rekening_atas_nama'=>'Melan Noerjanati'],

    		 ['nomor_induk'=>'161710105',
    		 'nama'=>'Penti Setiawatie',
    		 'tempat_lahir'=>'Bandung',
    		 'tanggal_lahir'=>'1999-07-012',
    		 'jenis_kelamin'=>'Perempuan',
    		 'agama'=>'Islam',
    		 'status_pernikahan'=>'Kawin',
    		 'jumlah_anak'=>'1',
    		 'tunjangan_keluarga'=>'250000',
    		 'alamat'=>'Kp. Bojong Koneng Ds. Rancamanyar Kec. Dayeuhkolot',
    		 'nomor_telepon'=>'085854656411',
    		 'pendidikan_terakhir'=>'D2',
    		 'kode_jabatan'=>'4',
    		 'kode_divisi'=>'4',
    		 'kode_departemen'=>'4',
    		 'gaji_pokok'=>'5000000',
    		 'tanggal_diangkat'=>'2018-01-01',
    		 'nama_bank'=>'BRI',
    		 'nomor_rekening'=>'32370103131553',
    		 'rekening_atas_nama'=>'Penti Setiawatie'],

    	];

    	Karyawan::insert($data);
    }
}
