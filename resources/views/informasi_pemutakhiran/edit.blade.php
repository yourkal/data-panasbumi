@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Pemutakhiran</h2>
    <form action="{{ route('informasi_pemutakhiran.update', $informasiPemutakhiran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $informasiPemutakhiran->status }}" required>
        </div>
        <div class="form-group">
            <label for="pengisi">Pengisi</label>
            <input type="text" class="form-control" id="pengisi" name="pengisi" value="{{ $informasiPemutakhiran->pengisi }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $informasiPemutakhiran->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="verifikator">Verifikator</label>
            <input type="text" class="form-control" id="verifikator" name="verifikator" value="{{ $informasiPemutakhiran->verifikator }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
