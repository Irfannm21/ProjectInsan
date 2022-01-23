@csrf

<div class="form-group row">
  <label for="kain_id" class="col-md-3 col-form-label text-md-right"
  title="gg_po">
    Kode Kain  </label>
  <div class="col-md-6">
    <input id="kain_id" type="text"
    class="form-control col-md-8 @error('kain_id') is-invalid @enderror"
    name="kain_id" value="{{ old('kain_id') ?? $item->kain_id ?? '' }}" autofocus
    placeholder="">
    @error('kain_id')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="notasi" class="col-md-3 col-form-label text-md-right"
  title="notasi">
    Notasi  </label>
  <div class="col-md-6">
    <input id="notasi" type="text"
    class="form-control col-md-8 @error('notasi') is-invalid @enderror"
    name="notasi" value="{{ old('notasi') ?? $item->notasi ?? '' }}" autofocus
    placeholder="">
    @error('notasi')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="keterangan" class="col-md-3 col-form-label text-md-right"
  title="keterangan">
    Keterangan  </label>
  <div class="col-md-6">
    <input id="keterangan" type="text"
    class="form-control col-md-8 @error('keterangan') is-invalid @enderror"
    name="keterangan" value="{{ old('keterangan') ?? $item->keterangan ?? '' }}" autofocus
    placeholder="">
    @error('keterangan')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

{{-- Trik agar bisa kembali ke halaman yang klik --}}
@isset($item)
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous().'#row-'.$item->id}}">
@else
  <input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous()}}">
@endisset

<div class="form-group row mt-5">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">{{$tombol}}</button>
  </div>
</div>

