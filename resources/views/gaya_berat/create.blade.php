@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Gaya Berat</h2>
    <form action="{{ route('gaya_berat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <div class="form-group">
            <label for="sari_gaya_berat">Sari Gaya Berat</label>
            <textarea class="form-control" id="sari_gaya_berat" name="sari_gaya_berat" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
