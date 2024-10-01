@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Sistem Panas Bumi</h2>
    <a href="{{ route('sistem_panas_bumi.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Batuan Reservoir</th>
                <th>Batuan Penudung</th>
                <th>Sumber Panas</th>
                <th>Sari</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sistemPanasBumi as $key => $data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->batuan_reservoir }}</td>
                    <td>{{ $data->batuan_penudung }}</td>
                    <td>{{ $data->sumber_panas }}</td>
                    <td>{{ $data->sari }}</td>
                    <td>
                        @if ($data->image)
                            <img src="{{ asset('storage/' . $data->image) }}" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('sistem_panas_bumi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sistem_panas_bumi.destroy', $data->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
