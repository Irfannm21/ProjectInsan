@extends('home')
@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
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
                </form>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
@endsection