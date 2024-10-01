@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Sistem Panas Bumi</h2>

    <form action="{{ route('sistem_panas_bumi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="batuan_reservoir">Batuan Reservoir</label>
            <input type="text" class="form-control" id="batuan_reservoir" name="batuan_reservoir" required>
        </div>

        <div class="form-group">
            <label for="batuan_penudung">Batuan Penudung</label>
            <input type="text" class="form-control" id="batuan_penudung" name="batuan_penudung" required>
        </div>

        <div class="form-group">
            <label for="sumber_panas">Sumber Panas</label>
            <input type="text" class="form-control" id="sumber_panas" name="sumber_panas" required>
        </div>

        <div class="form-group">
            <label for="sari">Sari</label>
            <textarea class="form-control" id="sari" name="sari" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
