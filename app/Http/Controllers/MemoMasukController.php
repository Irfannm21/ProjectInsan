<?php

namespace App\Http\Controllers;

use App\Models\MemoMasuk;
use Illuminate\Http\Request;


class MemoMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masuks = MemoMasuk::select('SELECT MemoMasuk.memo_id as masuk_id,
                                    memo.nomor as memo_id,   
                                    FROM MemoMasuk, memo WHERE MemoMasuk.memo_id = memo.nomor_id ');
        return view('masuk.table',['masuks' => $masuks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MemoMasuk  $memoMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(MemoMasuk $memoMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemoMasuk  $memoMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(MemoMasuk $memoMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemoMasuk  $memoMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemoMasuk $memoMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemoMasuk  $memoMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemoMasuk $memoMasuk)
    {
        //
    }
}
