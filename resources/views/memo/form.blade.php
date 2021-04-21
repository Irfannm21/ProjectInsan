@csrf
<br>
<div class="form-group row">
  <label for="nomor" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Nomor  </label>
  <div class="col-md-6">
    <input id="nomor" type="text"
    class="form-control col-md-8 @error('nomor') is-invalid @enderror"
    name="nomor" value="{{ old('nomor') ?? $memo->nomor ?? '' }}" autofocus
    placeholder="">
    @error('nomor')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="dari" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Dari  </label>
  <div class="col-md-6">
    <input id="dari" type="text"
    class="form-control col-md-8 @error('dari') is-invalid @enderror"
    name="dari" value="{{ old('dari') ?? $memo->dari ?? '' }}" autofocus
    placeholder="">
    @error('dari')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="kepada" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Kepada  </label>
  <div class="col-md-6">
    <input id="kepada" type="text"
    class="form-control col-md-8 @error('kepada') is-invalid @enderror"
    name="kepada" value="{{ old('kepada') ?? $memo->kepada ?? '' }}" autofocus
    placeholder="">
    @error('kepada')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="perihal" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Perihal  </label>
  <div class="col-md-6">
    <input id="perihal" type="text"
    class="form-control col-md-8 @error('perihal') is-invalid @enderror"
    name="perihal" value="{{ old('perihal') ?? $memo->perihal ?? '' }}" autofocus
    placeholder="">
    @error('perihal')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="tanggal" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Tanggal  </label>
  <div class="col-md-6">
    <input id="tanggal" type="date"
    class="form-control col-md-8 @error('tanggal') is-invalid @enderror"
    name="tanggal" value="{{ old('tanggal') ?? $memo->tanggal ?? '' }}" autofocus
    placeholder="">
    @error('tanggal')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="">
    <textarea id="mytextarea"
    class="@error('content') is-invalid @enderror"
    name="content"> 
    

    {{ old('content') ?? $memo->content ?? '' }}</textarea>
    @error('content')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
</div>

{{-- Trik agar bisa kembali ke halaman yang klik --}}
@isset($memo)
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous().'#row-'.$memo->id}}">
@else
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous()}}">
@endisset

<div class="form-group row mt-5">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">{{$tombol}}</button>
  </div>
</div>

