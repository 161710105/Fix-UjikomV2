@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Karyawan</h1>
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
                                <strong class="card-title">Data Karyawan</strong>
                                <a href="{{ route('karyawan.create') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            
                                            <th>Nomor Telepon</th>
                                            <th>Jabatan</th>
        
                                            <th>Edit</th>
                                            <th>Show</th>
                                            <th>Cetak</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $nomor = 1; ?>
								  		@php $no = 1; @endphp
								  		@foreach($karyawans as $data)
                                        <tr>
                                        	<td>{{ $no++ }}</td>
									    	<td><p>{{ $data->nomor_induk }}</p></td>
									    	<td>{{ $data->nama}}</td>
									    	<td>{{ $data->tempat_lahir}}</td>
									    	<td>{{ $data->tanggal_lahir}}</td>
                                            <td>{{ $data->jenis_kelamin}}</td>
                                            <td>{{ $data->nomor_telepon}}</td>
                                            <td>{{ $data->Jabatan->nama_jabatan}}</td>
                                            
				    	
<td>
	<a class="btn btn-warning btn-sm" href="{{ route('karyawan.edit',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
</td>
<td>
    <a class="btn btn-warning btn-sm" href="{{ route('karyawan.show',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Show</a>
</td>
<td>
<a href="{{ route('slipgaji',$data->id) }}" class="btn btn-success btn-sm float-right mt-1"><i class="fa fa-download"></i>&nbsp; Cetak </a>
</td>
<td>
	<form method="post" action="{{ route('karyawan.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Delete</button>
	</form>
</td>                                    </tr>
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


	