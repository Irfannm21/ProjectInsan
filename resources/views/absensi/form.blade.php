@csrf
<br>
<div class="form-group row">
  <label for="kode" class="col-md-3 col-form-label text-md-right"
  title="kode">
    Nik </label>
  <div class="col-md-4">
    <input id="kode" type="text"
    class="form-control col-md-8 @error('kode') is-invalid @enderror"
    name="kode" value="{{ old('kode') ?? $barcode->kode ?? '' }}" autofocus
    placeholder="Cth : 9888">
    @error('kode')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="tanggal" class="col-md-3 col-form-label text-md-right"
  title="tanggal">
    Tanggal  </label>
  <div class="col-md-4">
    <input id="tanggal" type="date"
    class="form-control col-md-8 @error('tanggal') is-invalid @enderror"
    name="tanggal" value="{{ old('tanggal') ?? $barcode->tanggal ?? '' }}" autofocus
    placeholder="12 digit angka, contoh: 00000000">
    @error('tanggal')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="tanggal" class="col-md-3 col-form-label text-md-right"
  title="tanggal">
    Keterangan  </label>
  <div class="col-md-4">

    <select name="keterangan" id="keterangan" class="form-control col-md-8">
        <option value="1">Non Shift</option>
        <option value="2">Shift A</option>
        <option value="3">Shift B</option>
        <option value="4">Shift C</option>
        <option value="5">Surat Dokter</option>
        <option value="6">Surat Dokter Pabrik</option>
        <option value="7">Cuti Tahunan</option>
        <option value="8">Cuti Besar</option>
        <option value="9">Cuti Khusus</option>
        <option value="10">Mangkir</option>
        
    </select>
  
  
    @error('tanggal')
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

