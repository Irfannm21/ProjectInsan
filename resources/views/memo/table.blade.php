@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Data Memo Engineering</h1>
            @auth 
            <td>
                <a href="{{route('memos.create')}}" class="fas fa-paperclip mr-1" title="Buat Order">New Memo</a>
                </form>
            </td>
            @endauth
</div>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>No Memo</th>
            <th>Date</th>
            <th>From</th>
            <th>For</th>
            <th>Subject</th>
            @auth
            <th>Action</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($memos as $memo)
        <tr id="row-{{$memo->id}}">
            <th>{{$memos->firstItem() + $loop->iteration - 1}}</th>
            <td>
            <a href="{{ route('memos.show',['memo' => $memo->id])}}">
            {{$memo->nomor}}
            </a>
            
            </td>
            <td>{{$memo->tanggal}}</td>
            <td>{{$memo->dari}}</td>
            <td>{{$memo->kepada}}</td>
            <td>{{$memo->perihal}}</td>
            @auth 
            <td>
            <a href="{{route('memos.edit',['memo'=>$memo->id])}}" class="far fa-edit"></a>
                 <form action="{{route('memos.update',['memo'=>$memo->id])}}" method="post" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="far fa-trash-alt" title="Hapus memo" data-name="{{$memo->id}}" data-table="memo">
                </button>
                <a href="{{route('cetak',['memo' => $memo->id])}}" class="fa fa-print"></a>

            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</section>
@endsection