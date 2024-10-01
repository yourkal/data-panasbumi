@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Geologi</h2>
    <form action="{{ route('geologi.update', $geologi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $geologi->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $geologi->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="sari_geologi">Sari Geologi</label>
            <input type="text" class="form-control" id="sari_geologi" name="sari_geologi" value="{{ $geologi->sari_geologi }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
