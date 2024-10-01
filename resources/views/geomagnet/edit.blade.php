@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Geomagnet</h2>
    <form action="{{ route('geomagnet.update', $geomagnet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $geomagnet->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $geomagnet->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="sari_geomagnet">Sari Geomagnet</label>
            <textarea class="form-control" id="sari_geomagnet" name="sari_geomagnet" required>{{ $geomagnet->sari_geomagnet }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('storage/' . $geomagnet->image) }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
