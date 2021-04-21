@csrf
<br>
<div class="form-group row">
  <label for="gg_po" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    GGPO Number  </label>
  <div class="col-md-6">
    <input id="gg_po" type="text"
    class="form-control col-md-8 @error('gg_po') is-invalid @enderror"
    name="gg_po" value="{{ old('gg_po') ?? $barcode->gg_po ?? '' }}" autofocus
    placeholder="">
    @error('gg_po')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="production" class="col-md-3 col-form-label text-md-right"
  title="production">
    Production Date  </label>
  <div class="col-md-6">
    <input id="production" type="text"
    class="form-control col-md-8 @error('production') is-invalid @enderror"
    name="production" value="{{ old('production') ?? $barcode->production ?? '' }}" autofocus
    placeholder="12 digit angka, contoh: 00000000">
    @error('production')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="expired" class="col-md-3 col-form-label text-md-right"
  title="expired">
    Expired Date  </label>
  <div class="col-md-6">
    <input id="expired" type="text"
    class="form-control col-md-8 @error('expired') is-invalid @enderror"
    name="expired" value="{{ old('expired') ?? $barcode->expired ?? '' }}" autofocus
    placeholder="6 digit angka, contoh: 010120">
    @error('expired')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="pallet_number" class="col-md-3 col-form-label text-md-right"
  title="pallet_number">
    Pallet Number  </label>
  <div class="col-md-6">
    <input id="pallet_number" type="text"
    class="form-control col-md-8 @error('pallet_number') is-invalid @enderror"
    name="pallet_number" value="{{ old('pallet_number') ?? $barcode->pallet_number ?? '' }}" autofocus
    placeholder="3 digit angka, contoh: 001">
    @error('pallet_number')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="quality" class="col-md-3 col-form-label text-md-right"
  title="quality">
    Quality  </label>
  <div class="col-md-6">
    <input id="quality" type="text"
    class="form-control col-md-8 @error('quality') is-invalid @enderror"
    name="quality" value="{{ old('quality') ?? $barcode->quality ?? '' }}" autofocus
    placeholder="1 digit angka, contoh: 1/0">
    @error('quality')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="quantity" class="col-md-3 col-form-label text-md-right"
  title="quantity">
    Quantity  </label>
  <div class="col-md-6">
    <input id="quantity" type="text"
    class="form-control col-md-8 @error('quantity') is-invalid @enderror"
    name="quantity" value="{{ old('quantity') ?? $barcode->quantity ?? '' }}" autofocus
    placeholder="3 digit angka, contoh: 010">
    @error('quantity')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="material" class="col-md-3 col-form-label text-md-right"
  title="material">
    Material Description  </label>
  <div class="col-md-6">
    <input id="material" type="text"
    class="form-control col-md-8 @error('material') is-invalid @enderror"
    name="material" value="{{ old('material') ?? $barcode->material ?? '' }}" autofocus
    placeholder="">
    @error('material')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="weight" class="col-md-3 col-form-label text-md-right"
  title="weight">
    Net Weight  </label>
  <div class="col-md-6">
    <input id="weight" type="text"
    class="form-control col-md-8 @error('weight') is-invalid @enderror"
    name="weight" value="{{ old('weight') ?? $barcode->weight ?? '' }}" autofocus
    placeholder="3 digit angka, contoh: 100">
    @error('weight')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="batch" class="col-md-3 col-form-label text-md-right"
  title="batch">
    Batch Number  </label>
  <div class="col-md-6">
    <input id="batch" type="text"
    class="form-control col-md-8 @error('batch') is-invalid @enderror"
    name="batch" value="{{ old('batch') ?? $barcode->batch ?? '' }}" autofocus
    placeholder="">
    @error('batch')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>


{{-- Trik agar bisa kembali ke halaman yang klik --}}
@isset($barcode)
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous().'#row-'.$barcode->id}}">
@else
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous()}}">
@endisset

<div class="form-group row mt-5">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">{{$tombol}}</button>
  </div>
</div>
