@csrf

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
  <label for="dari" class="col-md-3 col-form-label text-md-right">
    Dari </label>
  <div class="col-md-6">
    <select name="dari" id="dari"
    class="custom-select col-md-5 @error('dari') is-invalid @enderror">
    @foreach ($divisis as $divisi)
      @if ($divisi->id == (old('dari') ?? $memo->dari ?? ''))
      <option value="{{ $divisi->id }}" selected>{{ $divisi->nama }}</option>
      @else
      <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
      @endif
    @endforeach
    </select>
    @error('dari')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="kepada" class="col-md-3 col-form-label text-md-right">
    kepada </label>
  <div class="col-md-6">
    <select name="kepada" id="kepada"
    class="custom-select col-md-5 @error('kepada') is-invalid @enderror">
    @foreach ($divisis as $divisi)
      @if ($divisi->id == (old('kepada') ?? $memo->kepada ?? ''))
      <option value="{{ $divisi->id }}" selected>{{ $divisi->nama }}</option>
      @else
      <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
      @endif
    @endforeach
    </select>
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

