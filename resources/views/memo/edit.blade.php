@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Data Memo Engineering</h1>
     
</div>
<hr>
<form action="{{route('memos.update',['memo' => $memo->id])    }}" method="post">
    @method('PATCH')
    @include('memo.form',['tombol' => 'Update'])
</form>
</section>
@endsection