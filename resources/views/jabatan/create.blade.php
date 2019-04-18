@extends('layouts.admin')
@section('konten')
@include('layouts._flash')
		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Jabatan</h1>
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
			  	<form action="{{ route('jabatan.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode Jabatan</label>	
			  			<input type="text" name="kode_jabatan" class="form-control"  required>
			  			@if ($errors->has('kode_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<input type="text" name="nama_jabatan" class="form-control"  required>
			  			@if ($errors->has('nama_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tunjangan_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tunjangan Jabatan</label>	
			  			<input type="number" name="tunjangan_jabatan"  class="form-control"  required>
			  			@if ($errors->has('tunjangan_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tunjangan_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<script type="text/javascript">
		
						var rupiah = document.getElementById('rupiah');
						rupiah.addEventListener('keyup', function(e){
							// tambahkan 'Rp.' pada saat form di ketik
							// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
							rupiah.value = formatRupiah(this.value, 'Rp ');
						});
				 
						/* Fungsi formatRupiah */
						function formatRupiah(angka, prefix){
							var number_string = angka.replace(/[^,\d]/g, '').toString(),
							split   		= number_string.split(','),
							sisa     		= split[0].length % 3,
							rupiah     		= split[0].substr(0, sisa),
							ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
				 
							// tambahkan titik jika yang di input sudah menjadi angka ribuan
							if(ribuan){
								separator = sisa ? '.' : '';
								rupiah += separator + ribuan.join('.');
							}
				 
							rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
							return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
						}

					</script>

			  		<div class="form-group {{ $errors->has('level_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Level Jabatan</label>	
			  			<input type="text" name="level_jabatan" class="form-control"  required>
			  			@if ($errors->has('level_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('level_jabatan') }}</strong>
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