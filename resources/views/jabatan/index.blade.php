@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Jabatan</h1>
                    </div>
                </div>
            </div>
        </div>
 <div class="content mt-3">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Jabatan</strong>
                                <a href="{{ route('jabatan.create') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Kode Jabatan</th>
                                            <th>Nama Jabatan</th>
                                            <th>Tunjangan Jabatan</th>
                                            <th>Level Jabatan</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $nomor = 1; ?>
								  		@php $no = 1; @endphp
								  		@foreach($jabatan as $data)
                                        <tr>
                                        	<td>{{ $no++ }}</td>
									    	<td><p>{{ $data->kode_jabatan }}</p></td>
									    	<td>{{ $data->nama_jabatan}}</td>
									    	<td>Rp. {{ number_format($data->tunjangan_jabatan)}},-</td>
									    	<td>{{ $data->level_jabatan}}</td>
				    	
<td><form method="post" action="{{ route('jabatan.destroy',$data->id) }}">
	<a class="btn btn-warning btn-sm" href="{{ route('jabatan.edit',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
	
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button id="button-delete" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Delete</button>

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


	