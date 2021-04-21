<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::orderBy('created_at','DESC')->paginate(10);
        return view ('memo.table',['memos' => $memos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('memo.create');
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
            'nomor'   => 'required',
            'tanggal' => 'required',
            'dari'    => 'required',
            'kepada'  => 'required',
            'perihal' => 'required',
            'content' => 'required',
        ]);
        $memo = Memo::create($validateData);
        Alert::success('Berhasil', "Memo $request->nomor berhasil dibuat" );
        return redirect('/memos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function show(Memo $memo)
    {
        return view("memo.show",compact('memo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function edit(Memo $memo)
    {
        $memos = Memo::orderBy('id')->get();
        return view('memo.edit',['memo' => $memo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memo $memo)
    {
        $validateData = $request->validate([
            'nomor'   => 'required',
            'tanggal' => 'required',
            'dari'    => 'required',
            'kepada'  => 'required',
            'perihal' => 'required',
            'content' => 'required',
        ]);

        $memo->update($validateData);
        Alert::success('Berhasil', "Memo $request->nomor berhasil diubah" );
        return redirect('/memos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memo $memo)
    {
        $memo->delete();
        Alert::success('Berhasil', "Memo dengan nomor $memo->nomor berhasil dihapus");
        return redirect('/memos');
    }

    public function editor()
    {
        return view ('memo.create');
    }

    public function cetak(Memo $memo)
    {
        $memos = Memo::orderBy('id')->get();
        $data = [
            "memo" => $memo,
        ];
        
        $size = array(0,0,560,824);
        $pdf = PDF::loadView('memo.print',$data)->setPaper($size);
        return $pdf->stream();
    }
}
