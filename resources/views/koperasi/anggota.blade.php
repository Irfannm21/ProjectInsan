@extends('Template.master')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-body">
            
            <div class="pt-3 d-flex align-items-center">
            <h1 class="h2 mr-2">Data Anggota Koperasi</h1>
            @auth
            <td>
                <a href="{{route('anggotas.create')}}" class="fas fa-user mr-1" title="Buat Order">Tambah</a>
                </form>
            </td>
            @endauth
        </div>
        <hr>
        <table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Saldo</th>
            @auth
            <th>Action</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($anggotas as $anggota) 
        <tr id="row-{{$anggota->id}}">
        <th>{{$anggotas->firstItem() + $loop->iteration - 1}}</th>
           <td>
            <a href="{{ route('anggotas.show',['anggota' => $anggota->id])}}">
            {{$anggota->nik}}
            </a>
            
            </td>
            <td>{{$anggota->nama}}</td>
            <td>Rp.{{number_format($anggota->saldo,2,',',".")}}</td>
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