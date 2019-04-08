@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Departemen</h1>
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
			  	<form action="{{ route('departemen.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kode_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Departemen</label>	
			  			<input type="text" name="kode_departemen" class="form-control"  required>
			  			@if ($errors->has('kode_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Departemen</label>	
			  			<input type="text" name="nama_departemen" class="form-control"  required>
			  			@if ($errors->has('nama_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_departemen') }}</strong>
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