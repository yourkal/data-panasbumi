@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Informasi Anomali Panas Dangkal</h2>
    <form action="{{ route('anomali_panas_dangkal.update', $anomaliPanasDangkal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi">Informasi</label>
            <input type="text" class="form-control" id="informasi" name="informasi" value="{{ $anomaliPanasDangkal->informasi }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $anomaliPanasDangkal->keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="sari_anomali_panas_dangkal">Sari Anomali</label>
            <input type="text" class="form-control" id="sari_anomali_panas_dangkal" name="sari_anomali_panas_dangkal" value="{{ $anomaliPanasDangkal->sari_anomali }}" required>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
