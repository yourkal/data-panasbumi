@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Pemanfaatan</h2>
    <form action="{{ route('pemanfaatan.update', $pemanfaatan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sari">Sari</label>
            <input type="text" class="form-control" id="sari" name="sari" value="{{ $pemanfaatan->sari }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
