@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Informasi Geologi</h2>
    <form action="{{ route('geologi.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="sari_geologi">Sari Geologi</label>
            <input type="text" class="form-control" id="sari_geologi" name="sari_geologi" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
