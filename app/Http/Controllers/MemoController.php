<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Divisi;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\MemoMasuk;
use Illuminate\Support\Facades\DB;

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
        $divisis = Divisi::orderBy('id')->get();
        return view('memo.create',compact('divisis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try{
            $validateData = $request->validate([
                'nomor'   => 'required',
                'tanggal' => 'required',
                'dari'    => 'required | exists:App\Models\Divisi,id',
                'kepada'  => 'required',
                'perihal' => 'required',
                'content' => 'required',
            ]);
                  
            $memos = Memo::create($validateData);
            
            $memoMasuk = new MemoMasuk();
            $memoMasuk->memo_id = $request->nomor;
            $memoMasuk->content = $request->content;

            $memoMasuk->save();
         
            DB::commit();
            Alert::success("Berhasil','Memo dengan nomor $request->nomor berhasil ditambahkan");
            return redirect('/memos');
        } catch (\Exception $e) {
           DB::rollback();
            return redirect('/memos');
            Alert::warning("gagal','Memo dengan nomor $request->nomor gagal ditambahkan");
        }
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
        $divisis = Divisi::orderBy('nama')->get();
        return view('memo.edit',[
            'memo' => $memo,
            'divisis' => $divisis,
         ]);
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
