@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Penyelidikan Yang Telah Dilakukan</h2>
    <a href="{{ route('penyelidikan.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Laporan</th>
                <th>Penyelidik</th>
                <th>Tahun</th>
                <th>Hasil yang Diselidiki</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penyelidikan as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->judul_laporan }}</td>
                <td>{{ $data->penyelidik }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->hasil_yang_diselidiki }}</td>
                <td>
                    <a href="{{ route('penyelidikan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penyelidikan.destroy', $data->id) }}" method="POST" style="display:inline;">
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
