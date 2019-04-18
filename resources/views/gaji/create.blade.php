@extends('layouts.admin')
@section('konten')
@include('layouts._flash')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Gaji</h1>
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
			  	<form action="{{ route('gaji.store') }}" method="post" >
			  		{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('karyawan_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Karyawan</label>	
			  			<select id="karyawan_id" name="karyawan_id" class="form-control">
			  				<option disabled selected>-- Pilih Karyawan --</option>
			  				@foreach($karyawan as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('karyawan_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('karyawan_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bulan') ? ' has-error' : '' }}">
			  			<label class="control-label">Bulan</label>	
			  			<select class="form-control" name="bulan">
			  				<option disabled selected>-- Pilih Bulan --</option>
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
			  			<input type="number" name="tahun" value="<?php echo "" . date("Y");?>" class="form-control" readonly>
			  			@if ($errors->has('tahun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
			  			<label class="control-label">Gaji Pokok</label>	
			  			<input id="gaji_pokok" type="number" name="gaji_pokok" class="form-control" value="" readonly>
			  			@if ($errors->has('gaji_pokok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gaji_pokok') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Jabatan</label>	
			  			<input id="tunjangan_jabatan" type="number" name="tunjangan_jabatan" class="form-control" value="" readonly>
			  			@if ($errors->has('tunjangan_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_keluarga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Keluarga</label>	
			  			<input id="tunjangan_keluarga" type="number" name="tunjangan_keluarga" class="form-control" value="" readonly>
			  			@if ($errors->has('tunjangan_keluarga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_keluarga') }}</strong>
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
			  			<label class="control-label">Upah Lembur/Jam</label>	
			  			<input id="harga" type="number" value="25000" name="harga" class="form-control prc"  readonly>
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


			  		
			  		<div class="form-group {{ $errors->has('persen_pot_pph') ? ' has-error' : '' }}">
			  			<label class="control-label">Persen Pot PPH</label>	
			  			<input id="persen_pot_pph" type="number" name="persen_pot_pph" class="form-control" value="5" readonly>
			  			@if ($errors->has('persen_pot_pph'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persen_pot_pph') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('persen_pot_jamsostek') ? ' has-error' : '' }}">
			  			<label class="control-label">Persen Pot JAMSOSTEK</label>	
			  			<input id="persen_pot_jamsostek" type="number" name="persen_pot_jamsostek" class="form-control" value="2"  readonly>
			  			@if ($errors->has('persen_pot_jamsostek'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persen_pot_jamsostek') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('departemen') ? ' has-error' : '' }}">
			  			<label class="control-label">Departemen</label>	
			  			<input id="departemen" type="text" name="departemen" class="form-control" value="" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('divisi') ? ' has-error' : '' }}">
			  			<label class="control-label">Divisi</label>	
			  			<input id="divisi" type="text" name="divisi" class="form-control" value="" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jabatan</label>	
			  			<input id="jabatan" type="text" name="jabatan" class="form-control" value="" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_bank') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Bank</label>	
			  			<input id="nama_bank" type="text" name="nama_bank" class="form-control" value="" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('nomor_rekening') ? ' has-error' : '' }}">
			  			<label class="control-label">Nomor Rekening</label>	
			  			<input id="nomor_rekening" type="number" name="nomor_rekening" class="form-control" value="" readonly>
			  		</div>

	
			  		<div class="form-group {{ $errors->has('rekening_atas_nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Rekening Atas Nama</label>	
			  			<input id="rekening_atas_nama" type="text" name="rekening_atas_nama" class="form-control" value="" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('total_gaji') ? ' has-error' : '' }}">
			  			<label class="control-label">Total Gaji</label>	
			  			<input id="total_gaji" type="number" name="total_gaji" class="form-control" 
			  			value="ca"  readonly>
			  			@if ($errors->has('total_gaji'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_gaji') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
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
							console.log(calculate);
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
@section('js')
					<script type="text/javascript">
	
						$("#karyawan_id").change(function()
						{
							var id=$(this).val();
							$.ajax

							({
								type: "GET",
								url: "/gaji/getKaryawan",
								data: {id: id},
								cache: false,
								dataType:"json",
								success: function(data)
								{
									$("input[name='karyawan_id']").val(data.karyawan_id);
									$("input[name='gaji_pokok']").val(data.gaji_pokok);
									$("input[name='tunjangan_jabatan']").val(data.tunjangan_jabatan);
									$("input[name='tunjangan_keluarga']").val(data.tunjangan_keluarga);
									$("input[name='jabatan']").val(data.jabatan);
									$("input[name='divisi']").val(data.divisi);
									$("input[name='departemen']").val(data.departemen);
									$("input[name='nama_bank']").val(data.nama_bank);
									$("input[name='nomor_rekening']").val(data.nomor_rekening);
									$("input[name='rekening_atas_nama']").val(data.rekening_atas_nama);
								}
							});
						});

					</script>
@endsection