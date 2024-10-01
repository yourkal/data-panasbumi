@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Pemanfaatan</h2>
    <form action="{{ route('pemanfaatan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sari">Sari</label>
            <input type="text" class="form-control" id="sari" name="sari" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
</div>
@endsection
