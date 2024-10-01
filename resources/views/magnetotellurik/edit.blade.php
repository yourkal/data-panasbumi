@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Magnetotellurik</h2>
    <form action="{{ route('magnetotellurik.update', $magnetotellurik->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ old('informasi', $magnetotellurik->informasi) }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required>{{ old('keterangan', $magnetotellurik->keterangan) }}</textarea>
        </div>
        <div class="form-group">
            <label for="sari_magnetotellurik">Sari Magnetotellurik</label>
            <textarea class="form-control" id="sari_magnetotellurik" name="sari_magnetotellurik" required>{{ old('sari_magnetotellurik', $magnetotellurik->sari_magnetotellurik) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar (Opsional)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($magnetotellurik->image)
            <img src="{{ asset('storage/' . $magnetotellurik->image) }}" width="100" alt="Image">
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
