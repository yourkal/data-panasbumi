@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data TDEM</h2>
    <form action="{{ route('tdem.update', $tdem->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ old('informasi', $tdem->informasi) }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required>{{ old('keterangan', $tdem->keterangan) }}</textarea>
        </div>
        <div class="form-group">
            <label for="sari_tdem">Sari TDEM</label>
            <textarea class="form-control" id="sari_tdem" name="sari_tdem" required>{{ old('sari_tdem', $tdem->sari_tdem) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar (Opsional)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($tdem->image)
            <img src="{{ asset('storage/' . $tdem->image) }}" width="100" alt="Image">
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
