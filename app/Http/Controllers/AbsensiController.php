<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\masterKaryawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function index()
    {
        $result = absensi::whereBetween('tanggal',['2022-04-23','2022-05-22']   )->get();
        return view('absensi.index',['absensis' => $result]);
    }

    public function create()
    {
        return view('absensi.create');
    }


    public function store(Request $request)
    {
        $result = masterKaryawan::where('bagian','=',$request->kode)
        ->orderBy('nama',"asc")->get();

        foreach($result as $hasil)
        {
            dump($hasil);
        }
    }

    public function show(absensi $absensi)
    {
        //
    }

    public function edit(absensi $absensi)
    {

    }

    public function update(Request $request, absensi $absensi)
    {
        //
    }

    public function destroy(absensi $absensi)
    {
        //
    }
}
