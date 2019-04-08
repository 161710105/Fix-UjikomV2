<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use Session;
use Alert;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
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
            'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required|',
            'tunjangan_jabatan' => 'required|',
            'level_jabatan' => 'required|'
        ]);
        $jabatan = new Jabatan;
        $jabatan->kode_jabatan = $request->kode_jabatan;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
        $jabatan->level_jabatan = $request->level_jabatan;
        $jabatan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$jabatan->nama_jabatan</b>"
        ]);
        return redirect()->route('jabatan.index');
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
        $jabatan = Jabatan::findOrFail($id);
        return view('jabatan.edit',compact('jabatan'));
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
            'kode_jabatan' => 'required|',
            'nama_jabatan' => 'required|',
            'tunjangan_jabatan' => 'required|',
            'level_jabatan' => 'required|'
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->kode_jabatan = $request->kode_jabatan;
        $jabatan->nama_jabatan = $request->nama_jabatan;
        $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
        $jabatan->level_jabatan = $request->level_jabatan;
        $jabatan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$jabatan->nama_jabatan</b>"
        ]);
        return redirect()->route('jabatan.index');
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
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('jabatan.index');
    }
}
