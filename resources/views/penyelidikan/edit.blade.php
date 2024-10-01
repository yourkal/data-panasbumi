@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Penyelidikan</h2>
    <form action="{{ route('penyelidikan.update', $penyelidikan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul_laporan">Judul Laporan</label>
            <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" value="{{ $penyelidikan->judul_laporan }}" required>
        </div>
        <div class="form-group">
            <label for="penyelidik">Penyelidik</label>
            <input type="text" class="form-control" id="penyelidik" name="penyelidik" value="{{ $penyelidikan->penyelidik }}" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $penyelidikan->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="hasil_yang_diselidiki">Hasil yang Diselidiki</label>
            <input type="text" class="form-control" id="hasil_yang_diselidiki" name="hasil_yang_diselidiki" value="{{ $penyelidikan->hasil_yang_diselidiki }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
