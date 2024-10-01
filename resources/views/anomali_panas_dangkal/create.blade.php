@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Informasi Anomali Panas Dangkal</h2>
    <form action="{{ route('anomali_panas_dangkal.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="sari_anomali_panas_dangkal">Sari Anomali</label>
            <input type="text" class="form-control" id="sari_anomali_panas_dangkal" name="sari_anomali_panas_dangkal" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
