@extends('layouts.admin')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Departemen 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('departemen.update',$departemen->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kode_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Departemen</label>	
			  			<input type="text" name="kode_departemen" class="form-control" value="{{ $departemen->kode_departemen }}"  required>
			  			@if ($errors->has('kode_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Departemen</label>	
			  			<input type="text" name="nama_departemen" class="form-control" value="{{ $departemen->nama_departemen }}"  required>
			  			@if ($errors->has('nama_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection