@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">
<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Memo : {{$memo->nomor}}</h1>
</div>
<hr>
<div class="container">
<table align="left">
<tr>
  <td>
    Dari / From
  </td>
  <td>:</td>
  <td>{{$memo->dari}}</td>
</tr>
<tr>
  <td>
    Kepada / To
  </td>
  <td>:</td>
  <td>{{$memo->kepada}}</td>
</tr>
<tr>
  <td>
    Perihal / Re
  </td>
  <td>:</td>
  <td>{{$memo->perihal}}</td>
</tr>
</table>
<table align="right">
<tr>
  <td>
    No
  </td>
  <td>:</td>
  <td>{{$memo->nomor}}</td>
</tr>
<tr>
  <td>
    Tanggal
  </td>
  <td>:</td>
  <td>{{$memo->tanggal}}</td>
</tr>

</table>
</div>

</div>
<div class="container mt-3">
    &nbsp;{!! $memo->content !!}
</div>

</section>
@endsection