@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Penyelidikan</h2>
    <form action="{{ route('penyelidikan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_laporan">Judul Laporan</label>
            <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" required>
        </div>
        <div class="form-group">
            <label for="penyelidik">Penyelidik</label>
            <input type="text" class="form-control" id="penyelidik" name="penyelidik" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required>
        </div>
        <div class="form-group">
            <label for="hasil_yang_diselidiki">Hasil yang Diselidiki</label>
            <input type="text" class="form-control" id="hasil_yang_diselidiki" name="hasil_yang_diselidiki" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
