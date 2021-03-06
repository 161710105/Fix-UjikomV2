@extends('layouts.admin')
@section('konten')
@include('layouts._flash')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Divisi</h1>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  <div class="panel-body">
			  	<form action="{{ route('divisi.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kode_divisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Divisi</label>	
			  			<input type="text" name="kode_divisi" class="form-control"  required>
			  			@if ($errors->has('kode_divisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_divisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_divisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Divisi</label>	
			  			<input type="text" name="nama_divisi" class="form-control"  required>
			  			@if ($errors->has('nama_divisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_divisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection