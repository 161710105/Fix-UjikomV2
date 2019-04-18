@extends('layouts.admin')
@section('konten')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Data Gaji&nbsp;{{ $gaji->Karyawan->nama }} </h1>
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
                                    <label class=" form-control-label">Nama Karyawan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" value="{{ $gaji->Karyawan->nama}}" readonly>
                                    </div>
                                    
                                </div>
                           		<div class="form-group">
                                    <label class=" form-control-label">Bulan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" value="{{ $gaji->bulan}}" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tahun</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                                        <input class="form-control" value="{{ $gaji->tahun }}" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Gaji Pokok</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->gaji_pokok) }},-" readonly>
                                    </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Tunjangan Jabatan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->tunjangan_jabatan)}},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Tunjangan Keluarga</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->tunjangan_keluarga) }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Jumlah Jam Lembur</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-laptop"></i></div>
                                        <input class="form-control" value="{{ $gaji->jumlah_jam_lembur }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Harga/Jam</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->harga) }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Total Uang Lembur</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-laptop"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->total_uang_lembur) }},-" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Persen Pot PPH</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-legal"></i></div>
                                        <input class="form-control" value="{{ $gaji->persen_pot_pph }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Persen Pot BPJS</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-ambulance"></i></div>
                                        <input class="form-control" value="{{ $gaji->persen_pot_jamsostek }}" readonly>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Total Gaji</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-question"></i></div>
                                        <input class="form-control" value="Rp. {{ number_format($gaji->total_gaji) }},-" readonly>
                                    </div>
                                    
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Jabatan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                        <input class="form-control" value="{{ $gaji->jabatan }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Divisi</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
                                        <input class="form-control" value="{{ $gaji->divisi }}" readonly>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Departemen</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-building-o"></i></div>
                                        <input class="form-control" value="{{ $gaji->departemen }}" readonly>
                                    </div>
                                        
                                </div>
        
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Bank</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-bold"></i></div>
                                        <input class="form-control" value="{{ $gaji->nama_bank }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nomor Rekening</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control" value="{{ $gaji->nomor_rekening }}" readonly>
                                    </div>
                                    
                                </div>
                                    
                                <div class="form-group">
                                    <label class=" form-control-label">Rekening Atas Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control" value="{{ $gaji->rekening_atas_nama }}" readonly>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>

@endsection