@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Audiomagnetotelurik</h2>
    <form action="{{ route('audiomagnetotelurik.update', $audiomagnetotelurik->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $audiomagnetotelurik->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required>{{ $audiomagnetotelurik->keterangan }}</textarea>
        </div>
        <div class="form-group">
            <label for="sari_audiomagnetotelurik">Sari Audiomagnetotelurik</label>
            <textarea class="form-control" id="sari_audiomagnetotelurik" name="sari_audiomagnetotelurik" required>{{ $audiomagnetotelurik->sari_audiomagnetotelurik }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar (Opsional)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($audiomagnetotelurik->image)
            <img src="{{ asset('storage/' . $audiomagnetotelurik->image) }}" width="100" alt="Image">
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
