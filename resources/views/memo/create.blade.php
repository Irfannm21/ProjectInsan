@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2"><Table>Tambah Order Baru</Table></h1>
     
</div>
<hr>
<!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="POST" action="{{route('memos.store')}}">
              @include('memo.form',['tombol' => 'Tambah'])
              </form>
</section>
@endsection