<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class BarcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barcodes = Barcode::orderBy('created_at','DESC')->paginate(10);
        return view('barcode.index',['barcodes' => $barcodes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('barcode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $part = $request->material;
        $pregHuruf = preg_replace("/[^A-z]/","",$part);
        $pregAngka = preg_replace("/[^0-9]/","",$part);
        $huruf = str_pad($pregHuruf,17,'0',STR_PAD_LEFT);
        $angka = str_pad($pregAngka,8,'0',STR_PAD_LEFT);
        $part_number = $huruf.$angka;
        $request['part_number'] = $part_number;


        $validateData = $request->validate([
            'part_number' => 'required|size:25|alpha_num',
            'expired' => 'required|size:6',
            'production' => 'required|size:6',
            'pallet_number' => 'required|size:3',
            'quality' => 'required|size:1',
            'quantity' => 'required|size:3',
            'material' => 'required',
            'weight' => 'required|size:3',
            'gg_po' => 'required',
            'batch' => 'required',
        ]); 


        $barcode = Barcode::create($validateData);
        Alert::success('Berhasil',"PO number $request->gg_po berhasil dibuat");
        return redirect('/barcodes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show(Barcode $barcode)
    {
        return view('barcode.show',compact('barcode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Barcode $barcode)
    {
        
        $barcodes = Barcode::orderBy('part_number')->get();
        return view ('barcode.edit',['barcode' => $barcode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barcode $barcode)
    {

        $part = $request->material;
        $pregHuruf = preg_replace("/[^A-z]/","",$part);
        $pregAngka = preg_replace("/[^0-9]/","",$part);
        $huruf = str_pad($pregHuruf,17,'0',STR_PAD_LEFT);
        $angka = str_pad($pregAngka,8,'0',STR_PAD_LEFT);
        $part_number = $huruf.$angka;
        $request['part_number'] = $part_number;


        $validateData = $request->validate([
            'part_number' => 'required|size:25|alpha_num',
            'expired' => 'required|size:6',
            'production' => 'required|size:6',
            'pallet_number' => 'required|size:3',
            'quality' => 'required|size:1',
            'quantity' => 'required|size:3',
            'material' => 'required',
            'weight' => 'required|size:3',
            'gg_po' => 'required',
            'batch' => 'required',
        ]); 

        $barcode->update($validateData);
        Alert::success('Berhasil',"PO number $request->gg_po berhasil diubah");
        return redirect('/barcodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barcode $barcode, Request $request)
    {
        $barcode->delete();
        Alert::success('berhasil',"Barcode $barcode->gg_po telah di hapus");
        return redirect('/barcodes');
    }

    public function print(Barcode $barcode)
    {
        $barcodes = Barcode::orderBy('part_number')->get();
        $data = [
            "barcode" => $barcode,
        ];
        $size = array(0,0,560,824);
        $pdf = PDF::loadView('barcode.print',$data)->setPaper($size);
        return $pdf->stream();
    }

    public function Custom(Request $request)
    {

        $part = $request->material;
        $pregHuruf = preg_replace("/[^A-z]/","",$part);
        $pregAngka = preg_replace("/[^0-9]/","",$part);
        $huruf = str_pad($pregHuruf,17,'0',STR_PAD_LEFT);
        $angka = str_pad($pregAngka,8,'0',STR_PAD_LEFT);
        $part_number = $huruf.$angka;


        
    }
}
