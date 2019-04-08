@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Lembur Karyawan</h1>
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
                                <strong class="card-title">Data Lembur Karyawan</strong>
                                <a href="{{ route('lembur.create') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Jumlah Jam Lembur</th>
                                            <th>Harga/Jam</th>
                                            <th>Total Uang Lembur</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $nomor = 1; ?>
								  		@php $no = 1; @endphp
								  		@foreach($lembur as $data)
                                        <tr>
                                        	<td>{{ $no++ }}</td>
									    	<td>{{ $data->Karyawan->nama }}</td>
									    	<td>{{ $data->bulan}}</td>
									    	<td>{{ $data->tahun}}</td>
									    	<td>{{ $data->jumlah_jam_lembur}}</td>
                                            <td>Rp. {{ number_format($data->harga)}},- </td>
                                            <td>Rp. {{ number_format($data->total_uang_lembur)}},- </td>
				    	
<td>
	<a class="btn btn-warning btn-sm" href="{{ route('lembur.edit',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
</td>
<td>
	<form method="post" action="{{ route('lembur.destroy',$data->id) }}">
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


	