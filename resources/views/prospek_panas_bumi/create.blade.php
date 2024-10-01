@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Prospek Panas Bumi</h2>
    <form action="{{ route('prospek_panas_bumi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="sari">Sari</label>
            <input type="text" class="form-control" id="sari" name="sari" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
