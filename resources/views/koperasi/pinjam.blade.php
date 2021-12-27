@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Transaksi Koperasi</h1>
     
</div>
<hr>
              <form role="form" id="quickForm" method="POST" action="{{route('pinjamans.store')}}">
              @include('koperasi.form_pinjaman',['tombol' => 'Tambah'])
              </form>
</section>
@endsection 