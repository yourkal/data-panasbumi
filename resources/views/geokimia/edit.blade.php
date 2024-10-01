@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Geokimia</h2>
    <form action="{{ route('geokimia.update', $geokimia->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $geokimia->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $geokimia->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="sari_geokimia">Sari Geokimia</label>
            <input type="text" class="form-control" id="sari_geokimia" name="sari_geokimia" value="{{ $geokimia->sari_geokimia }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($geokimia->image)
                <img src="{{ asset('storage/' . $geokimia->image) }}" width="100" />
            @else
                No Image
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
