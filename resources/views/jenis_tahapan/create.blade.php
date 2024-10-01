@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Jenis dan Tahapan Penyelidikan</h2>
    <form action="{{ route('jenis_tahapan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tahap_penyelidikan">Tahap Penyelidikan</label>
            <input type="text" class="form-control" id="tahap_penyelidikan" name="tahap_penyelidikan" required>
        </div>
        <div class="form-group">
            <label for="metode_penyelidikan">Metode Penyelidikan</label>
            <input type="text" class="form-control" id="metode_penyelidikan" name="metode_penyelidikan" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
