@extends('layouts.admin')
@section('konten')
@include('layouts._flash')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Departemen</h1>
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
                                <strong class="card-title">Data Departemen</strong>
                                <a href="{{ route('departemen.create') }}" class="btn btn-primary btn-sm float-right mt-1"><i class="fa fa-plus-square"></i>&nbsp; Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Kode Departemen</th>
                                            <th>Nama Departemen</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $nomor = 1; ?>
								  		@php $no = 1; @endphp
								  		@foreach($departemen as $data)
                                        <tr>
                                        	<td>{{ $no++ }}</td>
									    	<td><p>{{ $data->kode_departemen }}</p></td>
									    	<td>{{ $data->nama_departemen}}</td>
				    	
<td>
    <form method="post" action="{{ route('departemen.destroy',$data->id) }}">
	<a class="btn btn-warning" href="{{ route('departemen.edit',$data->id) }}"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
	<form method="post" action="{{ route('departemen.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Delete</button>
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


	