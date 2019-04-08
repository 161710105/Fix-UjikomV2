<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Divisi;
use App\Jabatan;
use App\Departemen;
use App\Gaji;
use App\Lembur;
use DB;
use PDF;
use Session;
use Alert;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::with('Jabatan','Divisi','Departemen')->get();
        return view('karyawan.index',compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = Departemen::all();
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        
        return view('karyawan.create',compact('departemen','divisi','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Added','Good Job')->autoclose(2000);
        $this->validate($request,[
            'nomor_induk' => 'required|unique:karyawans',
            'nama' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|',
            'jenis_kelamin' => 'required|',
            'agama' => 'required|',
            'status_pernikahan' => 'required|',
            'jumlah_anak' => 'required|',
            'tunjangan_keluarga'=>'required|',
            'alamat' => 'required|',
            'nomor_telepon' => 'required|',
            'pendidikan_terakhir' => 'required|',
            'kode_jabatan' => 'required|',
            'kode_divisi' => 'required|',
            'kode_departemen' => 'required|',
            'gaji_pokok' => 'required|',
            'tanggal_diangkat' => 'required|',
            'tanggal_keluar' => 'required|',
            'nama_bank' => 'required|',
            'nomor_rekening' => 'required|',
            'rekening_atas_nama' => 'required|'
        ]);
        $karyawan = new Karyawan;
        $karyawan->nomor_induk = $request->nomor_induk;
        $karyawan->nama = $request->nama;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->agama = $request->agama;
        $karyawan->status_pernikahan = $request->status_pernikahan;
        if ($karyawan->status_pernikahan  == "Kawin") {
            $karyawan->jumlah_anak = $request->jumlah_anak;
            $karyawan->tunjangan_keluarga = $request->tunjangan_keluarga;
        } else {
            $karyawan->jumlah_anak = 0;
            $karyawan->tunjangan_keluarga = 0;
        }
        $karyawan->jumlah_anak = $request->jumlah_anak;
        $karyawan->tunjangan_keluarga = $request->tunjangan_keluarga;
        $karyawan->alamat = $request->alamat;
        $karyawan->nomor_telepon = $request->nomor_telepon;
        $karyawan->nama = $request->nama;
        $karyawan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $karyawan->kode_jabatan = $request->kode_jabatan;
        $karyawan->kode_divisi = $request->kode_divisi;
        $karyawan->kode_departemen = $request->kode_departemen;
        $karyawan->gaji_pokok = $request->gaji_pokok;
        $karyawan->tanggal_diangkat = $request->tanggal_diangkat;
        $karyawan->tanggal_keluar = $request->tanggal_keluar;
        $karyawan->nama_bank = $request->nama_bank;
        $karyawan->nomor_rekening = $request->nomor_rekening;
        $karyawan->rekening_atas_nama = $request->rekening_atas_nama;
        $karyawan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$karyawan->nama</b>"
        ]);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $jabatan = Jabatan::all();
        $selectedJabatan = Karyawan::findOrFail($id)->kode_jabatan;
        $divisi = Divisi::all();
        $selectedDivisi = Karyawan::findOrFail($id)->kode_divisi;
        $departemen = Departemen::all();
        $selectedDepartemen = Karyawan::findOrFail($id)->kode_departemen;
        
        return view('karyawan.show',compact('karyawan','jabatan','selectedJabatan','divisi','selectedDivisi','departemen','selectedDepartemen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $jabatan = Jabatan::all();
        $selectedJabatan = Karyawan::findOrFail($id)->kode_jabatan;
        $divisi = Divisi::all();
        $selectedDivisi = Karyawan::findOrFail($id)->kode_divisi;
        $departemen = Departemen::all();
        $selectedDepartemen = Karyawan::findOrFail($id)->kode_departemen;
        
        return view('karyawan.edit',compact('karyawan','jabatan','selectedJabatan','divisi','selectedDivisi','departemen','selectedDepartemen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Changed','Good Job')->autoclose(2000);
        $this->validate($request,[
            'nomor_induk' => 'required|',
            'nama' => 'required|',
            'tempat_lahir' => 'required|',
            'tanggal_lahir' => 'required|',
            'agama' => 'required|',
            'status_pernikahan' => 'required|',
            'jumlah_anak' => 'required|',
            'tunjangan_keluarga'=>'required|',
            'alamat' => 'required|',
            'nomor_telepon' => 'required|',
            'pendidikan_terakhir' => 'required|',
            'kode_jabatan' => 'required|',
            'kode_divisi' => 'required|',
            'kode_departemen' => 'required|',
            'gaji_pokok' => 'required|',
            'tanggal_diangkat' => 'required|',
            'tanggal_keluar' => 'required|',
            'nama_bank' => 'required|',
            'nomor_rekening' => 'required|',
            'rekening_atas_nama' => 'required|'
        ]);
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->nomor_induk = $request->nomor_induk;
        $karyawan->nama = $request->nama;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->agama = $request->agama;
        $karyawan->status_pernikahan = $request->status_pernikahan;
        $karyawan->jumlah_anak = $request->jumlah_anak;
        $karyawan->tunjangan_keluarga = $request->tunjangan_keluarga;
        $karyawan->alamat = $request->alamat;
        $karyawan->nomor_telepon = $request->nomor_telepon;
        $karyawan->nama = $request->nama;
        $karyawan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $karyawan->kode_jabatan = $request->kode_jabatan;
        $karyawan->kode_divisi = $request->kode_divisi;
        $karyawan->kode_departemen = $request->kode_departemen;
        $karyawan->gaji_pokok = $request->gaji_pokok;
        $karyawan->tanggal_diangkat = $request->tanggal_diangkat;
        $karyawan->tanggal_keluar = $request->tanggal_keluar;
        $karyawan->nama_bank = $request->nama_bank;
        $karyawan->nomor_rekening = $request->nomor_rekening;
        $karyawan->rekening_atas_nama = $request->rekening_atas_nama;
        $karyawan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$karyawan->nama</b>"
        ]);
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::error('Data Successfully Deleted','Good Job')->autoclose(2000);
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('karyawan.index');
    }

}
