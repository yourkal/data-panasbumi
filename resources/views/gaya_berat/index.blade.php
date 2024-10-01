@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Gaya Berat</h2>
    <a href="{{ route('gaya_berat.create') }}" class="btn btn-primary mb-2">Tambah Data Gaya Berat</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Gaya Berat</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gayaBerat as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->informasi }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->sari_gaya_berat }}</td>
                <td><img src="{{ asset('storage/' . $data->image) }}" width="100"></td>
                <td>
                    <a href="{{ route('gaya_berat.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('gaya_berat.destroy', $data->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
