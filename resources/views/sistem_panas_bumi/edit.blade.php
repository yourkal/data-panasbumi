@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Sistem Panas Bumi</h2>

    <form action="{{ route('sistem_panas_bumi.update', $sistemPanasBumi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="batuan_reservoir">Batuan Reservoir</label>
            <input type="text" class="form-control" id="batuan_reservoir" name="batuan_reservoir" value="{{ $sistemPanasBumi->batuan_reservoir }}" required>
        </div>

        <div class="form-group">
            <label for="batuan_penudung">Batuan Penudung</label>
            <input type="text" class="form-control" id="batuan_penudung" name="batuan_penudung" value="{{ $sistemPanasBumi->batuan_penudung }}" required>
        </div>

        <div class="form-group">
            <label for="sumber_panas">Sumber Panas</label>
            <input type="text" class="form-control" id="sumber_panas" name="sumber_panas" value="{{ $sistemPanasBumi->sumber_panas }}" required>
        </div>

        <div class="form-group">
            <label for="sari">Sari</label>
            <textarea class="form-control" id="sari" name="sari" required>{{ $sistemPanasBumi->sari }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            @if ($sistemPanasBumi->image)
                <img src="{{ asset('storage/' . $sistemPanasBumi->image) }}" width="100" class="mb-3">
            @endif
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
    </form>
</div>
@endsection
