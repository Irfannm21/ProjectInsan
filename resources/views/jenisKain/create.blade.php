@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Tambah Jenis Kain</h1>
     
</div>
<hr>  
<form action="{{route('types.store')}}" method="POST">
        @include('jenisKain.form',['tombol' => 'Tambah'])
    </form>
</section>
@endsection