@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data TDEM</h2>
    <form action="{{ route('tdem.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
        </div>
        <div class="form-group">
            <label for="sari_tdem">Sari TDEM</label>
            <textarea class="form-control" id="sari_tdem" name="sari_tdem" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar (Opsional)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
