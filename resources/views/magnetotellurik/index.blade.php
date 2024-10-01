@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Magnetotellurik</h1>
    <a href="{{ route('magnetotellurik.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Magnetotellurik</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->informasi }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->sari_magnetotellurik }}</td>
                <td><img src="{{ asset('storage/' . $item->image) }}" width="100" alt="Image"></td>
                <td>
                    <a href="{{ route('magnetotellurik.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('magnetotellurik.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
