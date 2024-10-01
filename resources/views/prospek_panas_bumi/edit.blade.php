@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Prospek Panas Bumi</h2>
    <form action="{{ route('prospek_panas_bumi.update', $prospek->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sari">Sari</label>
            <input type="text" class="form-control" id="sari" name="sari" value="{{ $prospek->sari }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            @if($prospek->image)
                <img src="{{ asset('storage/' . $prospek->image) }}" width="100" class="mt-2" />
            @else
                Tidak ada gambar
            @endif
        </div>
        <button type="submit" class="btn btn-primary mt-2">Perbarui</button>
    </form>
</div>
@endsection
