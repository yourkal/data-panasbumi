@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Gaya Berat</h2>
    <form action="{{ route('gaya_berat.update', $gayaBerat->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $gayaBerat->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $gayaBerat->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="sari_gaya_berat">Sari Gaya Berat</label>
            <textarea class="form-control" id="sari_gaya_berat" name="sari_gaya_berat" required>{{ $gayaBerat->sari_gaya_berat }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('storage/' . $gayaBerat->image) }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
