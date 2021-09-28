<?php

namespace App\Http\Controllers;

use App\Models\JenisKain as Type;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\MutasiKain;
use App\Models\StockKain;

class JenisKainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderBy('id','DESC')->paginate(10);
        return view('jenisKain.table',['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jenisKain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $validateData = $request->validate([
            'kain_id'    => 'required',
            'notasi'     => 'max:50',
            'keterangan' => 'max:255',
        ]);
        
        JenisKain::create($validateData);
        Alert::success('Berhasil',"Jenis Kain $request->kain_id berhasil ditambahkan");
       return redirect('/types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisKain  $jenisKain
     * @return \Illuminate\Http\Response
     */
    public function show(JenisKain $jenisKain)
    {
        return view('types.table',compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisKain  $jenisKain
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return dd($types);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisKain  $jenisKain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisKain $jenisKain)
    {
        return "Test 01 ";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisKain  $jenisKain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $Type)
    {
        $types->delete();
        Alert::success('Berhasil',"Jenis Kain $Type->id berhasil dihapus");
        return redirect('/types');
    }
}
