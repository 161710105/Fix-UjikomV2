<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\Karyawan;
use Session;
use Alert;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuti = Cuti::with('Karyawan')->get();
        return view('cuti.index',compact('cuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('cuti.create',compact('karyawan'));
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
            'jumlah_cuti' => 'required|'

            ]);

        $cuti = new Cuti;
        $cuti->nomor_induk = $request->nomor_induk;
        $cuti->bulan = $request->bulan;
        $cuti->tahun = $request->tahun;
        $cuti->jumlah_cuti = $request->jumlah_cuti;
        $cuti->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$cuti->nomor_induk</b>"
        ]);
        return redirect()->route('cuti.index');
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
        $cuti = Cuti::findOrFail($id);
        $karyawan = Karyawan::all();
        $selectedKaryawan = Cuti::findOrFail($id)->nomor_induk;
        return view('cuti.edit',compact('cuti','karyawan','selectedKaryawan'));
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
            'jumlah_cuti' => 'required|'

            ]);

        $cuti = Cuti::findOrFail($id);
        $cuti->nomor_induk = $request->nomor_induk;
        $cuti->bulan = $request->bulan;
        $cuti->tahun = $request->tahun;
        $cuti->jumlah_cuti = $request->jumlah_cuti;
        $cuti->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$cuti->nomor_induk</b>"
        ]);
        return redirect()->route('cuti.index');
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
        $cuti = Cuti::findOrFail($id);
        $cuti->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('cuti.index');
    }
}
