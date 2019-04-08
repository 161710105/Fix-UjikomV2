<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lembur;
use App\Karyawan;
use Session;
use Alert;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = Lembur::with('Karyawan')->get();
        return view('lembur.index',compact('lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('lembur.create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved','Good Job')->autoclose(2000);
        $this->validate($request,[
            'nomor_induk' => 'required|',
            'bulan' => 'required|',
            'tahun' => 'required|',
            'jumlah_jam_lembur' => 'required|',
            'harga' => 'required|',
            'total_uang_lembur' => 'required|'

            ]);

        $lembur = new Lembur;
        $lembur->nomor_induk = $request->nomor_induk;
        $lembur->bulan = $request->bulan;
        $lembur->tahun = $request->tahun;
        $lembur->jumlah_jam_lembur = $request->jumlah_jam_lembur;
        $lembur->harga = $request->harga;
        $lembur->total_uang_lembur = $request->total_uang_lembur;
        $lembur->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$lembur->nomor_induk</b>"
        ]);
        return redirect()->route('lembur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lembur = Lembur::findOrFail($id);
        $karyawan = Karyawan::all();
        $selectedKaryawan = Lembur::findOrFail($id)->nomor_induk;
        return view('lembur.edit',compact('lembur','karyawan','selectedKaryawan'));
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
            'bulan' => 'required|',
            'tahun' => 'required|',
            'jumlah_jam_lembur' => 'required|',
            'harga' => 'required|',
            'total_uang_lembur' => 'required|'


            ]);

        $lembur = Lembur::findOrFail($id);
        $lembur->nomor_induk = $request->nomor_induk;
        $lembur->bulan = $request->bulan;
        $lembur->tahun = $request->tahun;
        $lembur->jumlah_jam_lembur = $request->jumlah_jam_lembur;
        $lembur->harga = $request->harga;
        $lembur->total_uang_lembur = $request->total_uang_lembur;
        $lembur->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$lembur->nomor_induk</b>"
        ]);
        return redirect()->route('lembur.index');
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
        $lembur = Lembur::findOrFail($id);
        $lembur->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('lembur.index');
    }
}
