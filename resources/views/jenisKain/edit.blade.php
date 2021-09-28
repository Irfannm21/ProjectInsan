@extends('layouts.app')
@section('content')
<div class="pt-3">
    <h1 class="h2">Edit Jenis Kain</h1>
</div>
<hr>

<form action="{{route('types.update',['types' => $types->id])}}" method="post">
    @method('PATCH')
    @include('jenisKain.form',['tombol' => 'Update'])
</form>
@endsection     