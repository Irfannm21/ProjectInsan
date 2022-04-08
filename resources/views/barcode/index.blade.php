@extends('Template.master')
@section('content')
<section class="content">
<div class="card">
<div class="card-body">

<div class="pt-3 d-flex align-items-center">
  <h1 class="h2 mr-2">Data GGG PO Number</h1> 
            <td>
                <a href="{{route('barcodes.create')}}" class="fas fa-paperclip mr-1" title="Buat Order">New Order</a>
                </form>
            </td>

</div>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <!-- <th>Part Number</th> -->
            <th>GGG PO Number</th>
            <th>Expired</th>
            <th>Production</th>
            <th>Pallet Number</th>
            <th>Quality</th>
            <th>Quantity</th>
            <th>Material</th>
            <th>Weight</th>
            <th>Batch</th>
            @auth
            <th>Action</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($barcodes as $barcode) 
        <tr id="row-{{$barcode->id}}">
            <th>{{$barcodes->firstItem() + $loop->iteration - 1}}</th>
            <!-- <td>{{$barcode->part_number}}</td> -->
            <td>
            <a href="{{ route('barcodes.show',['barcode' => $barcode->id])}}">
            {{$barcode->gg_po}}
            </a>
            
            </td>
            <td>{{$barcode->expired}}</td>
            <td>{{$barcode->production}}</td>
            <td>{{$barcode->pallet_number}}</td>
            <td>{{$barcode->quality}}</td>
            <td>{{$barcode->quantity}}</td>
            <td>{{$barcode->material}}</td>
            <td>{{$barcode->weight}}</td>
            <td>{{$barcode->batch}}</td>
            @auth 
            <td>
                <a href="{{route('barcodes.edit',['barcode' => $barcode->id])}}" class="far fa-edit" title="Edit Barcode"></a>
                <form action="{{route('barcodes.destroy',['barcode' => $barcode->id])}}" method="post" class="d-inline">
                @csrf @method('DELETE')
                <button type="submit" class="far fa-trash-alt" title="Hapus Barcode" data-name="{{$barcode->part_number}}" data-table="barcode">
                </button>
                <a href="{{route('print',['barcode' => $barcode->id])}}" class="fa fa-print" title="Edit Barcode"></a>
                </form>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</section>
@endsection