@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Geolistrik</h2>
    <a href="{{ route('geolistrik.create') }}" class="btn btn-primary mb-2">Tambah Data Geolistrik</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Geolistrik</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($geolistrik as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->informasi }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->sari_geolistrik }}</td>
                <td><img src="{{ asset('storage/' . $data->image) }}" width="100"></td>
                <td>
                    <a href="{{ route('geolistrik.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('geolistrik.destroy', $data->id) }}" method="POST" style="display:inline;">
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
