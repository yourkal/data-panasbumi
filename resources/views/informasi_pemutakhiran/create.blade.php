@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Informasi Pemutakhiran</h2>
    <form action="{{ route('informasi_pemutakhiran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="form-group">
            <label for="pengisi">Pengisi</label>
            <input type="text" class="form-control" id="pengisi" name="pengisi" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="verifikator">Verifikator</label>
            <input type="text" class="form-control" id="verifikator" name="verifikator" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
