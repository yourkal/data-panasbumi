@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informasi Geokimia</h2>
    <a href="{{ route('geokimia.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Geokimia</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($geokimias as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->informasi }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->sari_geokimia }}</td>
                <td>
                    @if($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" width="100" />
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('geokimia.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('geokimia.destroy', $data->id) }}" method="POST" style="display:inline;">
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
