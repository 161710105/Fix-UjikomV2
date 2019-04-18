<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Divisi;
use App\Jabatan;
use App\Departemen;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::with('Jabatan','Divisi','Departemen')->get();
        $jumlah_karyawan = Karyawan::count();
        $jumlah_jabatan = Jabatan::count();
        $jumlah_divisi = Divisi::count();
        $jumlah_departemen = Departemen::count();
        return view('index',compact('karyawans','jumlah_karyawan','jumlah_departemen','jumlah_divisi','jumlah_jabatan'));
    }
}
