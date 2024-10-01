@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Informasi Wilayah</h2>
    <form action="{{ route('informasi_wilayah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_daerah">Nama Daerah</label>
            <input type="text" class="form-control" id="nama_daerah" name="nama_daerah" required>
        </div>
        <div class="form-group">
            <label for="nomor_daerah">Nomor Daerah</label>
            <input type="text" class="form-control" id="nomor_daerah" name="nomor_daerah" required>
        </div>
        <div class="form-group">
            <label for="pulau">Pulau</label>
            <input type="text" class="form-control" id="pulau" name="pulau" required>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>
        <div class="form-group">
            <label for="posisi_lintang">Posisi Lintang</label>
            <input type="number" step="any" class="form-control" id="posisi_lintang" name="posisi_lintang" required>
        </div>
        <div class="form-group">
            <label for="posisi_bujur">Posisi Bujur</label>
            <input type="number" step="any" class="form-control" id="posisi_bujur" name="posisi_bujur" required>
        </div>
        <div class="form-group">
            <label for="temperatur_manifestasi">Temperatur Manifestasi (°C)</label>
            <input type="number" step="any" class="form-control" id="temperatur_manifestasi" name="temperatur_manifestasi">
        </div>
        <div class="form-group">
            <label for="geotermometer">Geotermometer (°C)</label>
            <input type="number" step="any" class="form-control" id="geotermometer" name="geotermometer">
        </div>
        <div class="form-group">
            <label for="top_reservoir">Top Reservoir (mdpl)</label>
            <input type="number" step="any" class="form-control" id="top_reservoir" name="top_reservoir">
        </div>
        <div class="form-group">
            <label for="sumber_daya_spekulatif">Sumber Daya Spekulatif (Mwe)</label>
            <input type="number" step="any" class="form-control" id="sumber_daya_spekulatif" name="sumber_daya_spekulatif">
        </div>
        <div class="form-group">
            <label for="sumber_daya_hipotetis">Sumber Daya Hipotetis (Mwe)</label>
            <input type="number" step="any" class="form-control" id="sumber_daya_hipotetis" name="sumber_daya_hipotetis">
        </div>
        <div class="form-group">
            <label for="cadangan_mungkin">Cadangan Mungkin (Mwe)</label>
            <input type="number" step="any" class="form-control" id="cadangan_mungkin" name="cadangan_mungkin">
        </div>
        <div class="form-group">
            <label for="cadangan_terduga">Cadangan Terduga (Mwe)</label>
            <input type="number" step="any" class="form-control" id="cadangan_terduga" name="cadangan_terduga">
        </div>
        <div class="form-group">
            <label for="cadangan_terbukti">Cadangan Terbukti (Mwe)</label>
            <input type="number" step="any" class="form-control" id="cadangan_terbukti" name="cadangan_terbukti">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
