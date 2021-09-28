@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Data Jenis Kain</h1>
            @auth 
            <td>
                <a href="{{route('types.create')}}" class="fas fa-paperclip mr-1" title="Buat Order">Tambah Jenis</a>
                </form>
            </td>
            @endauth
</div>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>  
            <th>Jenis Kain</th>
            <th>Notasi</th>
            <th>Keterangan</th>
            @auth
            <th>Action</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr id="row-{{$type->id}}">
            <th>{{$types->firstItem() + $loop->iteration - 1}}</th>
            <td>    
            {{$type->kain_id}}
            </td>
            <td>{{$type->notasi}}</td>
            <td>{{$type->keterangan}}</td>
            @auth 
            <td>
                <a href="{{route('types.edit',['type' => $type->id])}}" class="far fa-edit" title="Edit type"></a>
                <form action="{{route('types.destroy',['type' => $type->id])}}" method="post" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="far fa-trash-alt" title="Hapus type" data-name="{{$type->part_number}}" data-table="type">
                </button>
                </form>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
@endsection