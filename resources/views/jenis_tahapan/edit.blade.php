@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Jenis dan Tahapan Penyelidikan</h2>
    <form action="{{ route('jenis_tahapan.update', $jenisTahapanPenyelidikan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tahap_penyelidikan">Tahap Penyelidikan</label>
            <input type="text" class="form-control" id="tahap_penyelidikan" name="tahap_penyelidikan" value="{{ $jenisTahapanPenyelidikan->tahap_penyelidikan }}" required>
        </div>
        <div class="form-group">
            <label for="metode_penyelidikan">Metode Penyelidikan</label>
            <input type="text" class="form-control" id="metode_penyelidikan" name="metode_penyelidikan" value="{{ $jenisTahapanPenyelidikan->metode_penyelidikan }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
