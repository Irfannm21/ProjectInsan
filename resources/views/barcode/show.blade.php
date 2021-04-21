@extends('home')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">
<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-4">Data GGG PO Number</h1>
            @auth 
            <td>
                <a href="{{route('barcodes.index')}}" class="fas fa-paperclip mr-1" title="Buat Order">Tambah Order</a>
                <a href="{{route('print',['barcode' => $barcode->id])}}" class="fa fa-print" title="Edit Barcode">Print</a>
                </form>
            </td>
            @endauth
</div>
<hr>    

<table>
<tr>
    <td>Part Number</td>
    <td>:</td>
    <td> <strong>{{$barcode->part_number}} </strong></td>
</tr>
<tr>
    <td>Production Date</td>
    <td>:</td>
    <td> <strong>{{$barcode->production}} </strong></td>
</tr>
<tr>
    <td>Expired Number</td>
    <td>:</td>
    <td> <strong>{{$barcode->expired}} </strong></td>
</tr>
<tr>
    <td>Pallet Number</td>
    <td>:</td>
    <td> <strong>{{$barcode->pallet_number}} </strong></td>
</tr>
<tr>
    <td>Quality</td>
    <td>:</td>
    <td> <strong>{{$barcode->quality}}</strong></td>
</tr>
<tr>
    <td>Quantity</td>
    <td>:</td>
    <td> <strong>{{$barcode->quantity}}</strong></td>
</tr>
<tr>
    <td>Material</td>
    <td>:</td>
    <td> <strong>{{$barcode->material}}</strong></td>
</tr>
<tr>
    <td>weight</td>
    <td>:</td>
    <td> <strong>{{$barcode->weight}}</strong></td>
</tr>
<tr>
    <td>GGG PO Number</td>
    <td>:</td>
    <td> <strong>{{$barcode->gg_po}}</strong></td>
</tr>
<tr>
    <td>Batch</td>
    <td>:</td>
    <td> <strong>{{$barcode->batch}}</strong></td>
</tr>
</table>
</div>
</div>
</section>

@endsection

