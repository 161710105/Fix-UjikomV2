<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departemen;
use Session;
use Alert;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen = Departemen::all();
        return view('departemen.index',compact('departemen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen.create');
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
            'kode_departemen' => 'required|unique:departemens',
            'nama_departemen' => 'required|'
        ]);
        $departemen = new Departemen;
        $departemen->kode_departemen = $request->kode_departemen;
        $departemen->nama_departemen = $request->nama_departemen;
        $departemen->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$departemen->nama_departemen</b>"
        ]);
        return redirect()->route('departemen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departemen = Departemen::findOrFail($id);
        return view('departemen.edit',compact('departemen'));
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
            'kode_departemen' => 'required|',
            'nama_departemen' => 'required|'
        ]);

        $departemen = Departemen::findOrFail($id);
        $departemen->kode_departemen = $request->kode_departemen;
        $departemen->nama_departemen = $request->nama_departemen;
        $departemen->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$departemen->nama_departemen</b>"
        ]);
        return redirect()->route('departemen.index');
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
        $departemen = Departemen::findOrFail($id);
        $departemen->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('departemen.index');
    }
}
