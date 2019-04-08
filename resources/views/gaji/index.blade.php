@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Gaji Karyawan</h1>
                    </div>
                </div>
            </div>
        </div>
 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Gaji Karyawan</strong>
                                <a href="{{ route('gaji.create') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Tambah</a>
                                <a href="{{ url('gaji/report/download') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Download PDF</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan Jabatan</th>
                                            <th>Tunjangan Keluarga</th>
                                            <th>Uang Lembur</th>
                                            <th>Persen Pot PPH</th>
                                            <th>Persen Pot JASMSOSTEK</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Departemen</th>
                                            <th>Nama Bank</th>
                                            <th>Nomor Rekening</th>
                                            <th>Rekening Atas Nama</th>
                                            <th>Total Gaji</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $nomor = 1; ?>
								  		@php $no = 1; @endphp
								  		@foreach($gaji as $data)
                                        <tr>
                                        	<td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
									    	<td>{{ $data->bulan}}</td>
									    	<td>{{ $data->tahun}}</td>
									    	<td>Rp. {{ number_format($data->gaji_pokok)}},-</td>
                                            <td>Rp. {{ number_format($data->tunjangan_jabatan)}},-</td>
                                            <td>Rp. {{ number_format($data->tunjangan_keluarga)}},-</td>
                                            <td>Rp. {{ number_format($data->uang_lembur)}},-</td>
                                            <td>{{ $data->persen_pot_pph}}%</td>
                                            <td>{{ $data->persen_pot_jamsostek}}%</td>
                                            <td>{{ $data->nama_jabatan}}</td>
                                            <td>{{ $data->nama_divisi}} </td>
                                            <td>{{ $data->nama_departemen}}</td>
                                            <td>{{ $data->nama_bank}}</td>
                                            <td>{{ $data->nomor_rekening}}</td>
                                            <td>{{ $data->rekening_atas_nama}}</td>
                                            <td>Rp. {{ number_format($data->total_gaji)}},-</td>
				    	
<td>
	<a class="btn btn-warning btn-sm" href="{{ route('gaji.edit',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
</td>
<td>
	<form method="post" action="{{ route('gaji.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Delete</button>
	</form>
</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection


	