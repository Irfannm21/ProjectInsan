@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">
<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Data Memo Engineering</h1>
  <!-- <div class="" id="luckysheet" style="margin:0px;padding:0px;position:absolute;width:100%;height:100%;left: 0px;top: 0px;"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br> -->
</div>
<hr>
@csrf

<form action="{{route('memos.store')}}" method="POST">
        @include('memo.form',['tombol' => 'Tambah'])
        
    </form>
    
</section>


  @endsection
