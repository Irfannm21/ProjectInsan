<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\Anggota;
use App\Models\JenisTransaksi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    
    public function index()
    {
        $transaksis  = JenisTransaksi::orderBy('id')->get();
        $anggotas    = Anggota::orderBy('nik')->get();
        return view('koperasi.pinjam',compact('anggotas','transaksis')); 
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {

        
        
        switch ($_POST['angsuran']) {
            case $_POST['angsuran'] = 1:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 1.025;
                break;
            case  $_POST['angsuran'] = 2:
                   $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.51883;
                    break;
            case  $_POST['angsuran'] = 3:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.35014;
                break;
            case  $_POST['angsuran'] = 4:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.26582;
                break;
            case  $_POST['angsuran'] = 5:
                   $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.21525;
                    break;
            case  $_POST['angsuran'] = 6:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1815;
                break;
            case  $_POST['angsuran'] = 7:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1564;
                break;
            case  $_POST['angsuran'] = 8:
                   $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1381;
                    break;
            case  $_POST['angsuran'] = 9:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1239;
                break;
            case  $_POST['angsuran'] = 10:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1125;
                break;
            case  $_POST['angsuran'] = 11:
                   $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.1035;
                    break;
            case  $_POST['angsuran'] = 12:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.09596;
                break;   
            case  $_POST['angsuran'] = 13:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.08955;
                break;
            case  $_POST['angsuran'] = 14:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.08406;
                break;
            case  $_POST['angsuran'] = 15:
           $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.07938;
            break;
            case  $_POST['angsuran'] = 16:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.07474;
                break;   
            case  $_POST['angsuran'] = 17:
           $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.07098;
            break;
            case  $_POST['angsuran'] = 18:
               $_POST['bayar'] = $_POST['jumlah_pinjaman'] * 0.0676;
                break;   
                    
                default:
                    
                    break;
        }

        $request['bayar'] = str_replace(".0","",$_POST["bayar"]);

        $valdiateData = $request->validate([
            'nik'               => 'required',
            'jenis_transaksi'    => 'required|exists:App\Models\JenisTransaksi,id',
            'jenis_pinjaman'    => 'required',
            'tanggal'           => 'required',
            'jumlah_pinjaman'   => 'required',
            'angsuran'          => 'required',
            'bayar'             => 'required',
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
        return "WAKWAW";
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
