@extends('layouts.admin')
@section('konten')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Lembur</h1>
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
			  	<form action="{{ route('lembur.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nomor_induk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Karyawan</label>	
			  			<select name="nomor_induk" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('nomor_induk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_induk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Bulan</label>	
			  			<select class="form-control" name="bulan">
			  				<option value="Januari">Januari</option>
			  				<option value="Februari">Februari</option>
			  				<option value="Maret">Maret</option>
			  				<option value="April">April</option>
			  				<option value="Mei">Mei</option>
			  				<option value="Juni">Juni</option>
			  				<option value="July">July</option>
			  				<option value="Agustus">Agustus</option>
			  				<option value="September">September</option>
			  				<option value="Oktober">Oktober</option>
			  				<option value="November">November</option>
			  				<option value="Desember">Desember</option>
			  				
			  			</select>
			  			@if ($errors->has('bulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bulan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun</label>	
			  			<input type="text" name="tahun" class="form-control"  required>
			  			@if ($errors->has('tahun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Jam Lembur</label>	
			  			<input id="jumlah_jam_lembur" type="number" name="jumlah_jam_lembur" class="form-control prc"  required>
			  			@if ($errors->has('jumlah_jam_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_jam_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input id="harga" type="number" name="harga" class="form-control prc"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_uang_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Uang Lembur</label>	
			  			<input id="total_uang_lembur" type="number" name="total_uang_lembur" class="form-control"  readonly>
			  			@if ($errors->has('total_uang_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_uang_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
<script src="{{ asset ('assets/ajax/jquery.min.js') }}"></script>
    <script>
        $('.form-group').on('input','.prc',function(){
            var totalSum = 0;
            var jumlah_jam_lembur = document.getElementById('jumlah_jam_lembur').value;
            var harga = document.getElementById('harga').value;
            $('.form-group .prc').each(function(){
                var inputVal = ( harga * jumlah_jam_lembur)/2;
                if($.isNumeric(inputVal)){
                    totalSum += parseFloat(inputVal);
                }
            });
            $('#total_uang_lembur').val(totalSum);
        });
	</script>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection