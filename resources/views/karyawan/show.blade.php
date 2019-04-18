@extends('layouts.admin')
@section('konten')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Data&nbsp;{{ $karyawan->nama }} </h1>
                    </div>
                </div>
            </div>
            <div class="page-header float-right">
                    <div class="page-title">
                        <a href="{{ url()->previous() }}">Kembali</a>
                    </div>
                </div>
        </div>
    <div class="col-xs-6 col-sm-6">
                        <div class="card" style="width: 685px">
                            <div class="card-header">
                                <strong class="card-title">Profle Pribadi</strong>
                            </div>
                           <div class="card-body card-block">
                           	<div class="form-group">
                                    <label class=" form-control-label">Nomor Induk</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-barcode"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_induk}}" readonly>
                                    </div>
                                    
                                </div>
                           		<div class="form-group">
                                    <label class=" form-control-label">Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nama}}" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Departemen</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-building-o"></i></div>
                                        <input class="form-control" value="{{ $karyawan->Departemen->nama_departemen }}" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Divisi</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
                                        <input class="form-control" value="{{ $karyawan->Divisi->nama_divisi}}" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Jabatan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                        <input class="form-control" value="{{ $karyawan->Jabatan->nama_jabatan}}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tempat Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <input class="form-control" value="{{ $karyawan->tempat_lahir}}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" value="{{ $karyawan->tanggal_lahir }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dot-circle-o"></i></div>
                                        <input class="form-control" value="{{ $karyawan->jenis_kelamin }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Agama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-heart"></i></div>
                                        <input class="form-control" value="{{ $karyawan->agama }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Status Pernikahan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-coffee"></i></div>
                                        <input class="form-control" value="{{ $karyawan->status_pernikahan }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jumlah Anak</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input class="form-control" value="{{ $karyawan->jumlah_anak }} Anak" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tunjangan Keluarga</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                        <input class="form-control" value="Rp.{{ $karyawan->tunjangan_keluarga }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Alamat</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
                                        <input class="form-control" value="{{ $karyawan->alamat }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_telepon }}" readonly>
                                    </div>
                                        
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Pendidikan Terakhir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-trophy"></i></div>
                                        <input class="form-control" value="{{ $karyawan->pendidikan_terakhir }}" readonly>
                                    </div>
                                        
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Gaji Pokok</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input class="form-control" value="Rp.{{ $karyawan->gaji_pokok }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Bank</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nama_bank }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Rekening</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control" value="{{ $karyawan->nomor_rekening }}" readonly>
                                    </div>
                                    
                                </div>
                                    
                                <div class="form-group">
                                    <label class=" form-control-label">Rekening Atas Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control" value="{{ $karyawan->rekening_atas_nama }}" readonly>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>

@endsection