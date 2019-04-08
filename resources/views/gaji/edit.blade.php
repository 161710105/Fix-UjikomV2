@extends('layouts.admin')
@section('konten')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Gaji Karyawan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('gaji.update',$gaji->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}

        			<div class="form-group {{ $errors->has('nomor_induk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Induk</label>	
			  			<select name="nomor_induk" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nomor_induk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('nomor_induk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_induk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Karyawan</label>	
			  			<select name="nama" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Bulan</label>	
			  			<input type="text" name="bulan" class="form-control" value="{{ $gaji->bulan }}"  required>
			  			@if ($errors->has('bulan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bulan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tahun') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun</label>	
			  			<input type="text" name="tahun" class="form-control" value="{{ $gaji->tahun }}"  required>
			  			@if ($errors->has('tahun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
			  			<label class="control-label">Gaji Pokok</label>	
			  			<input id="gaji_pokok" type="number" name="gaji_pokok" class="form-control prc" value="{{ $data->gaji_pokok }}" readonly>
			  			@if ($errors->has('gaji_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Jabatan</label>	
			  			<input id="tunjangan_jabatan" type="number" name="tunjangan_jabatan" class="form-control prc" value="{{ $data->Jabatan->tunjangan_jabatan }}" readonly>
			  			@if ($errors->has('tunjangan_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_keluarga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Keluarga</label>	
			  			<input id="tunjangan_keluarga" type="number" name="tunjangan_keluarga" class="form-control prc" value="{{ $data->tunjangan_keluarga }}" readonly>
			  			@if ($errors->has('tunjangan_keluarga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_keluarga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('uang_makan') ? ' has-error' : '' }}">
			  			<label class="control-label">Uang Makan</label>	
			  			<input id="uang_makan" type="number" name="uang_makan" class="form-control prc" value="{{ $data->Cabang->uang_makan }}" readonly>
			  			@if ($errors->has('uang_makan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uang_makan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('uang_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Uang Lembur</label>	
			  			<input type="number" id="uang_lembur" name="uang_lembur" class="form-control" value="{{ $gaji->uang_lembur }}"  readonly>
			  			@if ($errors->has('uang_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uang_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('persen_pot_pph') ? ' has-error' : '' }}">
			  			<label class="control-label">Persen Pot PPH</label>	
			  			<input type="number" id="persen_pot_pph" name="persen_pot_pph" class="form-control" value="{{ $gaji->persen_pot_pph }}"  required>
			  			@if ($errors->has('persen_pot_pph'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persen_pot_pph') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('persen_pot_jamsostek') ? ' has-error' : '' }}">
			  			<label class="control-label">Persen Pot JAMSOSTEK</label>	
			  			<input type="number" id="persen_pot_jamsostek" name="persen_pot_jamsostek" class="form-control" value="{{ $gaji->persen_pot_jamsostek }}"  required>
			  			@if ($errors->has('persen_pot_jamsostek'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persen_pot_jamsostek') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<input type="text" name="jabatan" class="form-control" value="{{ $data->Jabatan->nama_jabatan }}"  readonly>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('cabang') ? ' has-error' : '' }}">
			  			<label class="control-label">Cabang</label>	
			  			<input type="text" name="cabang" class="form-control" value="{{ $data->Cabang->nama_cabang }}"  readonly>
			  			@if ($errors->has('cabang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cabang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Departemen</label>	
			  			<input type="text" name="departemen" class="form-control" value="{{ $data->Departemen->nama_departemen }}"  readonly>
			  			@if ($errors->has('departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_bank') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bank</label>	
			  			<select name="nama_bank" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_bank }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('nama_bank'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_bank') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_rekening') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Rekening</label>	
			  			<select name="nomor_rekening" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->nomor_rekening }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('nomor_rekening'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_rekening') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rekening_atas_nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Rekening Atas Nama</label>	
			  			<select name="rekening_atas_nama" class="form-control">
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKaryawan == $data->id ? 'selected="selected"' : '' }} >{{ $data->rekening_atas_nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('rekening_atas_nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rekening_atas_nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_gaji') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Gaji</label>	
			  			<input type="text" id="total_gaji" name="total_gaji" class="form-control" value="{{ $gaji->total_gaji }}"  readonly>
			  			@if ($errors->has('total_gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_gaji') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  	<button value="calculate" onclick="HitungGaji()">Calculate</button>
					<script type="text/javascript">
		
						function HitungGaji() {
							var gaji_pokok = parseFloat(document.getElementById('gaji_pokok').value);
				            var tunjangan_jabatan = parseFloat(document.getElementById('tunjangan_jabatan').value);
				            var tunjangan_keluarga = parseFloat(document.getElementById('tunjangan_keluarga').value);
				            var uang_makan = parseFloat(document.getElementById('uang_makan').value);
				            var uang_lembur = parseFloat(document.getElementById('uang_lembur').value);
				            var pot_pph = parseFloat(document.getElementById('persen_pot_pph').value);
				            var pot_jamsostek = parseFloat(document.getElementById('persen_pot_jamsostek').value);
							var calculate = gaji_pokok + tunjangan_jabatan + tunjangan_keluarga + uang_makan + uang_lembur;
							var calculatepph = calculate * pot_pph / 100;
							var hasilpotpph = calculate - calculatepph;
							var calculatebpjs = hasilpotpph * pot_jamsostek / 100;
							var total_gaji = hasilpotpph - calculatebpjs;
							document.getElementById('total_gaji').value = total_gaji;
						}
		</script>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection