@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Audiomagnetotelurik</h1>
    <a href="{{ route('audiomagnetotelurik.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Audiomagnetotelurik</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->informasi }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->sari_audiomagnetotelurik }}</td>
                <td><img src="{{ asset('storage/' . $item->image) }}" width="100" alt="Image"></td>
                <td>
                    <a href="{{ route('audiomagnetotelurik.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('audiomagnetotelurik.destroy', $item->id) }}" method="POST" style="display:inline;">
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
