@extends('layouts.admin')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Lembur Karyawan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('lembur.update',$lembur->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nomor_induk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Karyawan</label>	
			  			<select name="nomor_induk" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
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
			  			<input type="text" name="bulan" class="form-control" value="{{ $lembur->bulan }}"  required>
			  			@if ($errors->has('bulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bulan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun</label>	
			  			<input type="text" name="tahun" class="form-control" value="{{ $lembur->tahun }}"  required>
			  			@if ($errors->has('tahun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Jam Lembur</label>	
			  			<input type="text" id="jumlah_jam_lembur" name="jumlah_jam_lembur" class="form-control prc" value="{{ $lembur->jumlah_jam_lembur }}"  required>
			  			@if ($errors->has('jumlah_jam_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_jam_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" id="harga" name="harga" class="form-control prc" value="{{ $lembur->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_uang_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Uang Lembur</label>	
			  			<input type="text" id="total_uang_lembur" name="total_uang_lembur" class="form-control" value="{{ $lembur->total_uang_lembur }}"  readonly>
			  			@if ($errors->has('total_uang_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_uang_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
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