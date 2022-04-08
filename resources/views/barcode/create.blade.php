@extends('Template.master')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Tambah Po Baru</h1>
     
</div>
<hr>
              <form role="form" id="quickForm" method="POST" action="{{route('barcodes.store')}}">
              @include('barcode.form',['tombol' => 'Tambah'])
              </form>
</section>
@endsection