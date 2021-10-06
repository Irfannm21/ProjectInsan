<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\Anggota;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    
    public function index()
    {
        return "TEST";
    }

    public function create()
    {
       $anggotas =  Anggota::orderBy('nik')->get();
       return view('koperasi.form_pinjaman',compact('anggotas'));
    }

    public function store(Request $request)
    {
        $valdiateData = $request->validate([
            'nik'               => 'required|aplha_num|size:4|unique:anggotas,nik',
            'jenis_pinjaman'    => 'required|unique:jenisJenisTransaksis:id',
            'tanggal'           => 'required',
            'jumlah_pinjaman'   => 'required|alpha_num',
            'angsuran'          => 'required|alpha_num',
            "bayar"             => 'required|alpha_num',
        ]);

        Pinjaman::create($valdiateData);
        Alert::success('Berhasil','Pinjaman Berhasil dibuat');
        return redirect($request->url_asal);
    }


    public function show(Pinjaman $pinjaman)
    {
        //
    }

    public function edit(Pinjaman $pinjaman)
    {
        //
    }


    public function update(Request $request, Pinjaman $pinjaman)
    {
        //
    }

    public function destroy(Pinjaman $pinjaman)
    {
        //
    }
}
