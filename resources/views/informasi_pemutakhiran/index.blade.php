@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Informasi Pemutakhiran</h2>
    <a href="{{ route('informasi_pemutakhiran.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Status</th>
                <th>Pengisi</th>
                <th>Tanggal</th>
                <th>Verifikator</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informasiPemutakhirans as $informasi)
            <tr>
                <td>{{ $informasi->status }}</td>
                <td>{{ $informasi->pengisi }}</td>
                <td>{{ $informasi->tanggal }}</td>
                <td>{{ $informasi->verifikator }}</td>
                <td>
                    <a href="{{ route('informasi_pemutakhiran.edit', $informasi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('informasi_pemutakhiran.destroy', $informasi->id) }}" method="POST" style="display:inline;">
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
