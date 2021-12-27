@csrf


<div class="form-group row">
<label for="nik" class="col-md-3 col-form-label text-md-right">
    NiK Anggota </label>
<div class="col-md-5">
<select name="nik" id="nik"
    class="custom-select col-md-5 @error('nik') is-invalid @enderror">
    <option value="" selected>-Pilih-</option>
    @foreach ($anggotas as $anggota)
      @if ($anggota->nik == (old('nik') ?? $anggota->nik ?? ''))
      <option value="{{ $anggota->nik }}">{{ $anggota->nik ." | ". $anggota->nama }}</option>
      @else
      <option value="{{ $anggota->nik }}">{{ $anggota->nik . " | " . $anggota->nama }}</option>
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
<label for="jenis_transaksi" class="col-md-3 col-form-label text-md-right">
    Jenis Transaksi </label>

<div class="col-md-5">
<select name="jenis_transaksi" id="jenis_transaksi"
    class="custom-select col-md-5 @error('jenis_transaksi') is-invalid @enderror">
    <option value="" selected>-Pilih-</option>
    @foreach ($transaksis as $transaksi)
      @if ($transaksi->id == (old('id') ?? $transaksi->id ?? ''))
      <option value="{{ $transaksi->id }}">{{  $transaksi->keterangan }}</option>
      @else
      <option value="{{ $transaksi->id }}">{{ $transaksi->keterangan }}</option>
      @endif
    @endforeach 
    </select>
    @error('jenis_transaksi')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
<label for="jenis_pinjaman" class="col-md-3 col-form-label text-md-right">
    Jenis Pinjaman </label>

<div class="col-md-5">
<select name="jenis_pinjaman" id="jenis_pinjaman"
    class="custom-select col-md-5 @error('jenis_pinjaman') is-invalid @enderror">
     <option value="" selected>-Pilih-</option>
      <option value="usp">USP</option>
      <option value="Emergency">Emergency</option>
      <option value="Konsumsi">Konsumsi</option>
    </select> 
    @error('jenis_pinjaman')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row">
    <label for="tanggal" class="col-md-3 col-form-label text-md-right" id="tanggal">
    Tanggal
    </label>
    <div class="col-md-3">
        <input type="date" id="tanggal" class="form-control col-md-8 @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') ?? $pinjamans->tanggal ?? ''}}" autofocus>
        @error('tanggal')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
<label for="angsuran" class="col-md-3 col-form-label text-md-right">
    Jumlah Pinjaman </label>

<div class="col-md-5">
<select name="jumlah_pinjaman" id="jumlah_pinjaman"
    class="custom-select col-md-5 @error('jumlah_pinjaman') is-invalid @enderror">
     <option value="" selected>-Pilih-</option>
     @for($i = 1; $i <= 40; $i++)
     <option value="{{$i*250000}}">Rp.
     <?php $total = $i * 250000; echo number_format($total,2,",","."); ?>
     
     </option>
     @endfor
    </select>
    @error('jumlah_pinjaman')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>


<div class="form-group row">
<label for="angsuran" class="col-md-3 col-form-label text-md-right">
    Jumlah Angsuran  </label>

<div class="col-md-5">
<select name="angsuran" id="angsuran"
    class="custom-select col-md-5 @error('angsuran') is-invalid @enderror">
     <option value="" selected>-Pilih-</option>
     @for($i = 1; $i <= 18; $i++)
     <option value="{{$i}}">{{$i}}</option>
     @endfor
    </select>
    @error('angsuran')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
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
