@csrf

<div class="form-group row">
<select name="nik" id="nik"
    class="custom-select col-md-5 @error('nik') is-invalid @enderror">
    @foreach ($anggotas as $anggota)
      @if ($anggota->nik == (old('nik') ?? $anggota->nik ?? ''))
      <option value="{{ $anggota->id }}" selected>{{ $anggota->nama }}</option>
      @else
      <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
      @endif
    @endforeach
    </select>
    @error('nik')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
<select name="nik" id="nik"
    class="custom-select col-md-5 @error('nik') is-invalid @enderror">
    @foreach ($anggotas as $anggota)
      @if ($anggota->nik == (old('nik') ?? $dosen->nik ?? ''))
      <option value="{{ $anggota->id }}" selected>{{ $anggota->nama }}</option>
      @else
      <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
      @endif
    @endforeach
    </select>
    @error('nik')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
    <label for="jenis_pinjaman" class="col-md-3 col-form-label text-md-right" id="jenis_pinjaman">
    Jenis Pinjaman
    </label>
    <div class="col-md-3">
        <input type="text" id="jenis_pinjaman" class="form-control col-md-8 @error('jenis_pinjaman') is-invalid @enderror" name="jenis_pinjaman" value="{{ old('jenis_pinjaman') ?? $pinjamans->jenis_pinjaman ?? ''}}" autofocus>
        @error('jenis_pinjaman')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="tanggal" class="col-md-3 col-form-label text-md-right" id="tanggal">
    Tanggal
    </label>
    <div class="col-md-3">
        <input type="text" id="tanggal" class="form-control col-md-8 @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') ?? $pinjamans->tanggal ?? ''}}" autofocus>
        @error('tanggal')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="jumlah_pinjaman" class="col-md-3 col-form-label text-md-right" id="jumlah_pinjaman">
    Total Pinjaman
    </label>
    <div class="col-md-3">
        <input type="text" id="jumlah_pinjaman" class="form-control col-md-8 @error('jumlah_pinjaman') is-invalid @enderror" name="jumlah_pinjaman" value="{{ old('jumlah_pinjaman') ?? $pinjamans->jumlah_pinjaman ?? ''}}" autofocus>
        @error('jumlah_pinjaman')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="angsuran" class="col-md-3 col-form-label text-md-right" id="angsuran">
    Total Angsuran
    </label>
    <div class="col-md-3">
        <input type="text" id="angsuran" class="form-control col-md-8 @error('angsuran') is-invalid @enderror" name="angsuran" value="{{ old('angsuran') ?? $pinjamans->angsuran ?? ''}}" autofocus>
        @error('angsuran')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

<!-- Trik agar bisa kembali ke halaman yang di klik -->

@isset($pinjaman)
<input type="hidden" name="url_asal"
  value="{{ old('url_asal') ?? url()->previous().'#row-'.$pinjaman->id}}">
@else
<input type="hidden" name="url_asal"
value="{{ old('url_asal') ?? url()->previous() }}">
@endisset


<div class="form-group row mt-5">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary">{{$tombol}}</button>
  </div>
</div>
