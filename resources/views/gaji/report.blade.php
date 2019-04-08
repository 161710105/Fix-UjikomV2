<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
    </head>
    <body>
        
        <style type="text/css">
            .tabel { border-collapse: collapse; }
            .tabel th { padding: 8px 5px; background-color: #f60; color: #fff; }
            .tabel td { padding: 3px; }
        </style>
       
        

            <div style="padding: 4mm; border: 1px solid;" align="center">
                <p>
                <span style="font-size: 25px;">Data Gaji Karyawan</span>
                
            </p>
            </div>
            <br>
            <br>
           
      
        
            <table class="table" border="1px" >
<tr>
           
                <th bgcolor="#C0C0C0">No</th>
                <th bgcolor="#C0C0C0">Nomor Induk</th>
                <th bgcolor="#C0C0C0">Nama Karyawan</th>
                <th bgcolor="#C0C0C0">Bulan</th>
                <th bgcolor="#C0C0C0">Tahun</th>
                <th bgcolor="#C0C0C0">Gaji Pokok</th>
                <th bgcolor="#C0C0C0">Tunjangan Jabatan</th>
                <th bgcolor="#C0C0C0">Tunjangan Keluarga</th>
                <th bgcolor="#C0C0C0">Uang Makan</th>
                <th bgcolor="#C0C0C0">Uang Lembur</th>
                <th bgcolor="#C0C0C0">Persen Pot PPH</th>
                <th bgcolor="#C0C0C0">Persen Pot JASMSOSTEK</th>
                <th bgcolor="#C0C0C0">Jabatan</th>
                <th bgcolor="#C0C0C0">Cabang</th>
                <th bgcolor="#C0C0C0">Departemen</th>
                <th bgcolor="#C0C0C0">Nama Bank</th>
                <th bgcolor="#C0C0C0">Nomor Rekening</th>
                <th bgcolor="#C0C0C0">Rekening Atas Nama</th>
                <th bgcolor="#C0C0C0">Total Gaji</th>                     
        </tr>

                <?php $nomor = 1; ?>
                                        @php $no = 1; @endphp
                                        @foreach($gaji as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nomor_induk }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->bulan}}</td>
                                            <td>{{ $data->tahun}}</td>
                                            <td>{{ $data->gaji_pokok}}</td>
                                            <td>{{ $data->tunjangan_jabatan}}</td>
                                            <td>{{ $data->tunjangan_keluarga}}</td>
                                            <td>{{ $data->uang_makan}}</td>
                                            <td>{{ $data->uang_lembur}}</td>
                                            <td>{{ $data->persen_pot_pph}}</td>
                                            <td>{{ $data->persen_pot_jamsostek}}</td>
                                            <td>{{ $data->nama_jabatan}}</td>
                                            <td>{{ $data->nama_cabang}}</td>
                                            <td>{{ $data->nama_departemen}}</td>
                                            <td>{{ $data->nama_bank}}</td>
                                            <td>{{ $data->nomor_rekening}}</td>
                                            <td>{{ $data->rekening_atas_nama}}</td>
                                            <td>{{ $data->total_gaji }}</td>
                                        </tr>
                                        @endforeach
            </table>
    </body>
</html>
