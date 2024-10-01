@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Umum</h2>
    <form action="{{ route('data_umum.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis_laporan">Jenis Laporan</label>
            <input type="text" class="form-control" id="jenis_laporan" name="jenis_laporan" required>
        </div>
        <div class="form-group">
            <label for="judul_laporan">Judul Laporan</label>
            <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" required>
        </div>
        <div class="form-group">
            <label for="instansi_pelapor">Instansi Pelapor</label>
            <input type="text" class="form-control" id="instansi_pelapor" name="instansi_pelapor" required>
        </div>
        <div class="form-group">
            <label for="penulis_laporan">Penulis Laporan</label>
            <input type="text" class="form-control" id="penulis_laporan" name="penulis_laporan" required>
        </div>
        <div class="form-group">
            <label for="sumber_data">Sumber Data</label>
            <input type="text" class="form-control" id="sumber_data" name="sumber_data" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
