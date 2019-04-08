@extends('layouts.admin')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Karyawan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('karyawan.update',$karyawan->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nomor_induk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Induk</label>	
			  			<input type="text" name="nomor_induk" class="form-control" value="{{ $karyawan->nomor_induk }}"  required>
			  			@if ($errors->has('nomor_induk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_induk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control" value="{{ $karyawan->tempat_lahir }}"  required>
			  			@if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control" value="{{ $karyawan->tanggal_lahir }}"  required>
			  			@if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			  			<input type="radio" name="jenis_kelamin" class="form-check-input"  value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  			<input type="radio" name="jenis_kelamin" class="form-check-input"  value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<select class="form-control" name="agama">
			  				<option value="Islam" {{ $karyawan->agama == "Islam" ? "selected":"" }}>Islam</option>
			  				<option value="Kristen" {{ $karyawan->agama == "Kristen" ? "selected":"" }}>Kristen</option>
			  				<option value="Budha" {{ $karyawan->agama == "Budha" ? "selected":"" }}>Budha</option>
			  				<option value="Hindu" {{ $karyawan->agama == "Hindu" ? "selected":"" }}>Hindu</option>
			  				<option value="Kong Hu Cu" {{ $karyawan->agama == "Kong Hu Cu" ? "selected":"" }}>Kong Hu Cu</option>
			  				
			  			</select>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
			  			<label class="control-label">Status Pernikahan</label>
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
			  			<input type="radio" name="status_pernikahan" class="form-check-input"  value="Kawin" {{ $karyawan->status_pernikahan == 'Kawin' ? 'checked' : '' }}>Kawin
			  			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  			<input type="radio" name="status_pernikahan" class="form-check-input"  value="Belum Kawin" {{ $karyawan->status_pernikahan == 'Belum Kawin' ? 'checked' : '' }}>Belum Kawin
			  			@if ($errors->has('status_pernikahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status_pernikahan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Anak</label>	
			  			<input type="number" id="jumlah_anak" name="jumlah_anak" class="form-control prc" value="{{ $karyawan->jumlah_anak }}"  required>
			  			@if ($errors->has('jumlah_anak'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_anak') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_keluarga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Keluarga</label>	
			  			<input type="number" id="tunjangan_keluarga" name="tunjangan_keluarga" class="form-control" value="{{ $karyawan->tunjangan_keluarga }}"  readonly>
			  			@if ($errors->has('tunjangan_keluarga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_keluarga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" id="alamat">{{ $karyawan->alamat }}</textarea>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Telepon</label>	
			  			<input type="number" name="nomor_telepon" class="form-control" value="{{ $karyawan->nomor_telepon }}"  required>
			  			@if ($errors->has('nomor_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_telepon') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pendidikan_terakhir') ? ' has-error' : '' }}">
			  			<label class="control-label">Pendidikan Terakhir</label>	
			  			<input type="text" name="pendidikan_terakhir" class="form-control" value="{{ $karyawan->pendidikan_terakhir }}"  required>
			  			@if ($errors->has('pendidikan_terakhir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pendidikan_terakhir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<select name="kode_jabatan" class="form-control">
			  				@foreach($jabatan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedJabatan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_jabatan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_divisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Divisi</label>	
			  			<select name="kode_divisi" class="form-control">
			  				@foreach($divisi as $data)
			  				<option value="{{ $data->id }}" {{ $selectedDivisi == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_divisi }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_divisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_divisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kode_departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Departemen</label>	
			  			<select name="kode_departemen" class="form-control">
			  				@foreach($departemen as $data)
			  				<option value="{{ $data->id }}" {{ $selectedDepartemen == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_departemen }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kode_departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
			  			<label class="control-label">Gaji Pokok</label>	
			  			<input type="number" name="gaji_pokok" class="form-control" value="{{ $karyawan->gaji_pokok }}"  required>
			  			@if ($errors->has('gaji_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_diangkat') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Diangkat</label>	
			  			<input type="date" name="tanggal_diangkat" class="form-control" value="{{ $karyawan->tanggal_diangkat }}"  required>
			  			@if ($errors->has('tanggal_diangkat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_diangkat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal_keluar') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Keluar</label>	
			  			<input type="date" name="tanggal_keluar" class="form-control" value="{{ $karyawan->tanggal_keluar }}"  required>
			  			@if ($errors->has('tanggal_keluar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_keluar') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_bank') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bank</label>	
			  			<input type="text" name="nama_bank" class="form-control" value="{{ $karyawan->nama_bank }}"  required>
			  			@if ($errors->has('nama_bank'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_bank') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_rekening') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Rekening</label>	
			  			<input type="number" name="nomor_rekening" class="form-control" value="{{ $karyawan->nomor_rekening }}"  required>
			  			@if ($errors->has('nomor_rekening'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_rekening') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rekening_atas_nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Rekening Atas Nama</label>	
			  			<input type="text" name="rekening_atas_nama" class="form-control" value="{{ $karyawan->rekening_atas_nama }}"  required>
			  			@if ($errors->has('rekening_atas_nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rekening_atas_nama') }}</strong>
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
            var tunjangan = 250000;
            var jumlah_anak = document.getElementById('jumlah_anak').value;
            $('.form-group .prc').each(function(){
                var inputVal = (tunjangan * jumlah_anak);
                if($.isNumeric(inputVal)){
                    totalSum += parseFloat(inputVal);
                }
            });
            $('#tunjangan_keluarga').val(totalSum);
        });
	</script>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection