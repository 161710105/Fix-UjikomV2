<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;
use App\Karyawan;
use DB;
use Session;
use PDF;
use Alert;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji = DB::table('gajis')
                ->join('jabatans','gajis.jabatan','=','jabatans.nama_jabatan')
                ->join('divisis','gajis.divisi','=','divisis.nama_divisi')
                ->join('departemens','gajis.departemen','=','departemens.nama_departemen')
                ->join('karyawans','gajis.karyawan_id','=','karyawans.id')
                ->select('gajis.*','jabatans.nama_jabatan','jabatans.tunjangan_jabatan',
                        'divisis.nama_divisi',
                    'karyawans.nama','karyawans.nomor_rekening','karyawans.tunjangan_keluarga','karyawans.gaji_pokok','karyawans.nama_bank','karyawans.nomor_rekening',
                    'karyawans.rekening_atas_nama','departemens.nama_departemen'
                    )->get();
                // dd($gaji);
        return view('gaji.index',compact('gaji'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('gaji.create',compact('karyawan'));
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
            'bulan' => 'required|',
            'tahun' => 'required|',
            'gaji_pokok' => 'required|',
            'tunjangan_jabatan' => 'required|',
            'tunjangan_keluarga' => 'required|',
            'persen_pot_pph' => 'required|',
            'persen_pot_jamsostek' => 'required|',
            'jabatan' => 'required|',
            'divisi' => 'required|',
            'departemen' => 'required|',
            'nama_bank' => 'required|',
            'nomor_rekening' => 'required|',
            'rekening_atas_nama' => 'required|',
            'total_gaji' => 'required|',
            'jumlah_jam_lembur' => 'required|',
            'harga' => 'required|',
            'total_uang_lembur' => 'required|',
            'karyawan_id' => 'required'

            ]);

        $gaji = new Gaji;
        $gaji->bulan = $request->bulan;
        $gaji->tahun = $request->tahun;
        $gaji->gaji_pokok = $request->gaji_pokok;
        $gaji->tunjangan_jabatan = $request->tunjangan_jabatan;
        $gaji->tunjangan_keluarga = $request->tunjangan_keluarga;
        $gaji->persen_pot_pph = $request->persen_pot_pph;
        $gaji->persen_pot_jamsostek = $request->persen_pot_jamsostek;
        $gaji->jabatan = $request->jabatan;
        $gaji->divisi = $request->divisi;
        $gaji->departemen = $request->departemen;
        $gaji->nama_bank = $request->nama_bank;
        $gaji->nomor_rekening = $request->nomor_rekening;
        $gaji->rekening_atas_nama = $request->rekening_atas_nama;
        $gaji->total_gaji = $request->total_gaji;
        $gaji->jumlah_jam_lembur = $request->jumlah_jam_lembur;
        $gaji->harga = $request->harga;
        $gaji->total_uang_lembur = $request->total_uang_lembur;
        $gaji->karyawan_id = $request->karyawan_id;
        $gaji->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Gaji <b>$gaji->rekening_atas_nama</b>"
        ]);
        return redirect()->route('gaji.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gaji = Gaji::findOrFail($id);
        $karyawan = Karyawan::all();
        return view('gaji.show',compact('gaji','karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaji = Gaji::findOrFail($id);
        $karyawan = Karyawan::all();
        return view('gaji.edit',compact('gaji','karyawan'));
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
            'karyawan_id' => 'required|',
            'bulan' => 'required|',
            'tahun' => 'required|',
            'gaji_pokok' => 'required|',
            'tunjangan_jabatan' => 'required|',
            'tunjangan_keluarga' => 'required|',
            'persen_pot_pph' => 'required|',
            'persen_pot_jamsostek' => 'required|',
            'jabatan' => 'required|',
            'divisi' => 'required|',
            'departemen' => 'required|',
            'nama_bank' => 'required|',
            'nomor_rekening' => 'required|',
            'rekening_atas_nama' => 'required|',
            'total_gaji' => 'required|',
            'jumlah_jam_lembur' => 'required|',
            'harga' => 'required|',
            'total_uang_lembur' => 'required|'

            ]);

        $gaji = Gaji::findOrFail($id);
        $gaji->karyawan_id = $request->karyawan_id;
        $gaji->bulan = $request->bulan;
        $gaji->tahun = $request->tahun;
        $gaji->gaji_pokok = $request->gaji_pokok;
        $gaji->tunjangan_jabatan = $request->tunjangan_jabatan;
        $gaji->tunjangan_keluarga = $request->tunjangan_keluarga;
        $gaji->persen_pot_pph = $request->persen_pot_pph;
        $gaji->persen_pot_jamsostek = $request->persen_pot_jamsostek;
        $gaji->jabatan = $request->jabatan;
        $gaji->divisi = $request->divisi;
        $gaji->departemen = $request->departemen;
        $gaji->nama_bank = $request->nama_bank;
        $gaji->nomor_rekening = $request->nomor_rekening;
        $gaji->rekening_atas_nama = $request->rekening_atas_nama;
        $gaji->total_gaji = $request->total_gaji;
        $gaji->jumlah_jam_lembur = $request->jumlah_jam_lembur;
        $gaji->harga = $request->harga;
        $gaji->total_uang_lembur = $request->total_uang_lembur;
        $gaji->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$gaji->nama</b>"
        ]);
        return redirect()->route('gaji.index');
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
        $gaji = Gaji::findOrFail($id);
        $gaji->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('gaji.index');
    }

    public function report(Request $request)
    {
        $gaji = DB::table('gajis')
                ->join('jabatans','gajis.jabatan','=','jabatans.id')
                ->join('divisis','gajis.divisi','=','divisis.id')
                ->join('departemens','gajis.departemen','=','departemens.id')
                // ->join('lemburs','gajis.lembur','=','lemburs.id')
                ->join('karyawans','gajis.nama','=','karyawans.id')
                ->select('gajis.*','jabatans.nama_jabatan','jabatans.tunjangan_jabatan',
                        'divisis.nama_divisi',
                    'karyawans.nama','karyawans.tunjangan_keluarga','karyawans.gaji_pokok','karyawans.nama_bank','karyawans.nomor_rekening',
                    'karyawans.rekening_atas_nama','departemens.nama_departemen'
                    )->get();

        if($request->view_type === 'download') {
            $pdf = PDF::loadView('gaji.report',['gaji'=> $gaji]);
            return $pdf->download('gaji.pdf');

        } else {

            $view = View('gaji.report', ['gaji'=> $gaji]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }

    public function slipgaji(Request $request, $id)
    {
        $gaji = $gaji = DB::table('gajis')
                ->join('jabatans','gajis.jabatan','=','jabatans.nama_jabatan')
                ->join('divisis','gajis.divisi','=','divisis.nama_divisi')
                ->join('departemens','gajis.departemen','=','departemens.nama_departemen')
                ->join('karyawans','gajis.karyawan_id','=','karyawans.id')
                ->select('gajis.*','jabatans.nama_jabatan','jabatans.tunjangan_jabatan',
                        'divisis.nama_divisi',
                    'karyawans.nama','karyawans.nomor_rekening','karyawans.tunjangan_keluarga','karyawans.gaji_pokok','karyawans.nama_bank','karyawans.nomor_rekening',
                    'karyawans.rekening_atas_nama','departemens.nama_departemen'
                    )->where('gajis.id','=',$id)->get();

        if($request->view_type === 'download') {
            $pdf = PDF::loadView('gaji.slipgaji',['gaji'=> $gaji]);
            return $pdf->download('gaji.pdf');

        } else {

            $view = View('gaji.slipgaji', ['gaji'=> $gaji]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }

    public function getKaryawan(Request $request){
        $karyawan = Karyawan::find($request->id);
        $karyawan_id = $karyawan->id;
        $gaji_pokok = $karyawan->gaji_pokok;
        $tunjangan_jabatan = $karyawan->Jabatan->tunjangan_jabatan;
        $tunjangan_keluarga = $karyawan->tunjangan_keluarga;
        $jabatan = $karyawan->Jabatan->nama_jabatan;
        $divisi = $karyawan->Divisi->nama_divisi;
        $departemen = $karyawan->Departemen->nama_departemen;
        $nama_bank = $karyawan->nama_bank;
        $nomor_rekening = $karyawan->nomor_rekening;
        $rekening_atas_nama = $karyawan->rekening_atas_nama;

        return json_encode([
            "karyawan_id" => $karyawan_id,
            "gaji_pokok" => $gaji_pokok,
            "tunjangan_jabatan" => $tunjangan_jabatan,
            "tunjangan_keluarga" => $tunjangan_keluarga,
            "jabatan" => $jabatan,
            "divisi" => $divisi,
            "departemen" => $departemen,
            "nama_bank" => $nama_bank,
            "nomor_rekening" => $nomor_rekening,
            "rekening_atas_nama" => $rekening_atas_nama,
  
        ]);

    }
}
