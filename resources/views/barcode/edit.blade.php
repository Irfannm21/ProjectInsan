@extends('Template.master')
@section('content')
<div class="pt-3">
    <h1 class="h2">Edit Barcode</h1>
</div>
<hr>

<form action="{{route('barcodes.update',['barcode' => $barcode->id])}}" method="post">
    @method('PATCH')
    @include('barcode.form',['tombol' => 'Update'])
</form>
@endsection