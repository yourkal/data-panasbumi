@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Umum</h2>
    <a href="{{ route('data_umum.create') }}" class="btn btn-primary">Tambah Data</a>
    @if (session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Laporan</th>
                <th>Judul Laporan</th>
                <th>Instansi Pelapor</th>
                <th>Penulis Laporan</th>
                <th>Sumber Data</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUmum as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->jenis_laporan }}</td>
                    <td>{{ $data->judul_laporan }}</td>
                    <td>{{ $data->instansi_pelapor }}</td>
                    <td>{{ $data->penulis_laporan }}</td>
                    <td>{{ $data->sumber_data }}</td>
                    <td>
                        <a href="{{ route('data_umum.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('data_umum.destroy', $data->id) }}" method="POST" style="display:inline-block">
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
