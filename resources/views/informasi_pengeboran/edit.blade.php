@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Pengeboran</h2>
    <form action="{{ route('informasi_pengeboran.update', $informasiPengeboran->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $informasiPengeboran->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $informasiPengeboran->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="representatif_sumur">Representatif Sumur</label>
            <input type="text" class="form-control" id="representatif_sumur" name="representatif_sumur" value="{{ $informasiPengeboran->representatif_sumur }}" required>
        </div>
        <div class="form-group">
            <label for="sari">Sari</label>
            <input type="text" class="form-control" id="sari" name="sari" value="{{ $informasiPengeboran->sari }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            <small>Gambar saat ini:</small>
            <img src="{{ asset('storage/' . $informasiPengeboran->image) }}" width="100" />
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
