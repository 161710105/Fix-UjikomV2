@extends('layouts.admin')
@section('konten')
@include('layouts._flash')
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

			  			<input type="hidden" name="karyawan_id" class="form-control" value="{{ $gaji->karyawan_id }}"  readonly>
			  		</div>
			  		<div class="form-group {{ $errors->has('karyawan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Karyawan</label>	
			  			<input type="text" name="karyawan" class="form-control" value="{{ $gaji->Karyawan->nama }}"  readonly>
			  			@if ($errors->has('karyawan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('karyawan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Bulan</label>	
			  			<select class=" form-control" name="bulan"  required>
			  				<option value="Januari">Januari</option>
			  				<option value="Februari"> {{ $gaji->bulan == "Februari" ? : "" }}Februari</option>
			  				<option value="Maret"> {{ $gaji->bulan == "Maret" ? : "" }}Maret</option>
			  				<option value="April"> {{ $gaji->bulan == "April" ? : "" }}April</option>
			  				<option value="Mei"> {{ $gaji->bulan == "Mei" ? : "" }}Mei</option>
			  				<option value="Juni"> {{ $gaji->bulan == "Juni" ? : "" }}Juni</option>
			  				<option value="Juli"> {{ $gaji->bulan == "Juli" ? : "" }}Juli</option>
			  				<option value="Agustus"> {{ $gaji->bulan == "Agustus" ? : "" }}Agustus</option>
			  				<option value="September"> {{ $gaji->bulan == "September" ? : "" }}September</option>
			  				<option value="Oktober"> {{ $gaji->bulan == "Oktober" ? : "" }}Oktober</option>
			  				<option value="November"> {{ $gaji->bulan == "November" ? : "" }}November</option>
			  				<option value="Desember"> {{ $gaji->bulan == "Desember" ? : "" }}Desember</option>
                    	</select>
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
			  			<input id="gaji_pokok" type="number" name="gaji_pokok" class="form-control" value="{{ $gaji->gaji_pokok }}" readonly>
			  			@if ($errors->has('gaji_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Jabatan</label>	
			  			<input id="tunjangan_jabatan" type="number" name="tunjangan_jabatan" class="form-control" value="{{ $gaji->tunjangan_jabatan }}" readonly>
			  			@if ($errors->has('tunjangan_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_keluarga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Keluarga</label>	
			  			<input id="tunjangan_keluarga" type="number" name="tunjangan_keluarga" class="form-control" value="{{ $gaji->tunjangan_keluarga }}" readonly>
			  			@if ($errors->has('tunjangan_keluarga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_keluarga') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Jam Lembur</label>	
			  			<input id="jumlah_jam_lembur" value="{{ $gaji->jumlah_jam_lembur }}" type="number" name="jumlah_jam_lembur" class="form-control prc"  required>
			  			@if ($errors->has('jumlah_jam_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_jam_lembur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input id="harga" type="number" value="{{ $gaji->harga }}" name="harga" class="form-control prc"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('total_uang_lembur') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Uang Lembur</label>	
			  			<input id="total_uang_lembur" value="{{ $gaji->total_uang_lembur }}" type="number" name="total_uang_lembur" class="form-control"  readonly>
			  			@if ($errors->has('total_uang_lembur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_uang_lembur') }}</strong>
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
			  			<input type="text" name="jabatan" class="form-control" value="{{ $gaji->jabatan }}"  readonly>
			  			@if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('divisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Divisi</label>	
			  			<input type="text" name="divisi" class="form-control" value="{{ $gaji->divisi }}"  readonly>
			  			@if ($errors->has('divisi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('divisi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Departemen</label>	
			  			<input type="text" name="departemen" class="form-control" value="{{ $gaji->departemen }}"  readonly>
			  			@if ($errors->has('departemen'))
                            <span class="help-block">
                                <strong>{{ $errors->first('departemen') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_bank') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bank</label>	
			  			<input type="text" name="nama_bank" class="form-control" value="{{ $gaji->nama_bank }}"  readonly>
			  			@if ($errors->has('nama_bank'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_bank') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_rekening') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Rekening</label>	
			  			<input type="text" name="nomor_rekening" class="form-control" value="{{ $gaji->nomor_rekening }}"  readonly>
			  			@if ($errors->has('nomor_rekening'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomor_rekening') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('rekening_atas_nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Rekening Atas Nama</label>	
			  			<input type="text" name="rekening_atas_nama" class="form-control" value="{{ $gaji->rekening_atas_nama }}"  readonly>
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
				            var total_uang_lembur = parseFloat(document.getElementById('total_uang_lembur').value);
				            var pot_pph = parseFloat(document.getElementById('persen_pot_pph').value);
				            var pot_jamsostek = parseFloat(document.getElementById('persen_pot_jamsostek').value);
							var calculate = gaji_pokok + tunjangan_jabatan + tunjangan_keluarga + total_uang_lembur;
							var calculatepph = calculate * pot_pph / 100;
							var hasilpotpph = calculate - calculatepph;
							var calculatebpjs = hasilpotpph * pot_jamsostek / 100;
							var total_gaji = hasilpotpph - calculatebpjs;
							document.getElementById('total_gaji').value = total_gaji;
						}
		</script>
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