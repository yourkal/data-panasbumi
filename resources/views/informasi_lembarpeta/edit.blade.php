@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Lembar Peta dan Citra</h2>
    <form action="{{ route('informasi_lembarpeta.update', $informasiLembarPeta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="peta_topografi">Peta Topografi/Skala</label>
            <input type="text" class="form-control" id="peta_topografi" name="peta_topografi" value="{{ $informasiLembarPeta->peta_topografi }}" required>
        </div>
        <div class="form-group">
            <label for="peta_geologi">Peta Geologi/Skala</label>
            <input type="text" class="form-control" id="peta_geologi" name="peta_geologi" value="{{ $informasiLembarPeta->peta_geologi }}" required>
        </div>
        <div class="form-group">
            <label for="citra">Citra</label>
            <input type="text" class="form-control" id="citra" name="citra" value="{{ $informasiLembarPeta->citra }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
