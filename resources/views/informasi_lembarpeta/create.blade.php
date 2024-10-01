@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Informasi Lembar Peta dan Citra</h2>
    <form action="{{ route('informasi_lembarpeta.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="peta_topografi">Peta Topografi/Skala</label>
            <input type="text" class="form-control" id="peta_topografi" name="peta_topografi" required>
        </div>
        <div class="form-group">
            <label for="peta_geologi">Peta Geologi/Skala</label>
            <input type="text" class="form-control" id="peta_geologi" name="peta_geologi" required>
        </div>
        <div class="form-group">
            <label for="citra">Citra</label>
            <input type="text" class="form-control" id="citra" name="citra" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
