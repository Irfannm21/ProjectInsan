@extends('Template.master')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-body">
            
            <div class="pt-3 d-flex align-items-center">
            <h1 class="h2 mr-2">Data Anggota Koperasi</h1>
           
            <td>
                <a href="{{route('pinjamans.create')}}" class="fas fa-user mr-1" title="Buat Order">Tambah</a>
                </form>
            </td>
            </div>  
                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIK / NAMA</th>
                            <th>Jenis Transaksi</th>
                            <th>Jenis Pinjaman</th>
                            <th>Tanggal</th>
                            <th>Jumlah Pinjaman</th>
                            <th>Angsuran</th>
                            <th>Bayar Angsuran</th>
                            <th></th>
                            @auth
                            <th>Action</th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pinjamans as $pinjam) 
                        <tr id="row-{{$pinjam->id}}">
                        <th>{{$pinjamans->firstItem() + $loop->iteration - 1}}</th>
                        <td>
                            {{$pinjam->nik}}
                        </td>
                        <td>
                            {{$pinjam->jenis_transaksi}}
                        </td>
                        <td>
                            {{$pinjam->jenis_pinjaman}}
                        </td>
                        <td>
                            {{$pinjam->tanggal}}
                        </td>
                        <td>
                            Rp.{{number_format($pinjam->jumlah_pinjaman,2,',','.')}}
                        </td>
                        <td>
                            {{$pinjam->angsuran}}
                        </td>
                        <td>
                            Rp.{{number_format($pinjam->bayar,2,',',".")}}
                        </td>
                        @auth 
                        <td>
                            <a href="{{route('anggotas.edit',['anggota' => $anggota->id])}}" class="far fa-edit" title="Edit Barcode"></a>

                            <form action="{{route('anggotas.destroy',['anggota' => $anggota->id])}}" method="post" class="d-inline">
                            
                            @csrf @method('DELETE')
                            <button type="submit" class="far fa-trash-alt" title="Hapus Barcode" data-name="{{$anggota->part_number}}" data-table="anggota">
                            </button>
                        </form>
                        </td>
                        @endauth
                        </tr>
                        @endforeach
                    </tbody>
</table>
    </div>
</section>
@endsection