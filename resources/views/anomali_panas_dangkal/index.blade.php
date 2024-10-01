@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informasi Anomali Panas Dangkal</h2>
    <a href="{{ route('anomali_panas_dangkal.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari Anomali</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anomaliPanasDangkals as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->informasi }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->sari_anomali_panas_dangkal }}</td>
                <td><img src="{{ asset('storage/' . $data->image) }}" width="100" /></td>
                <td>
                    <a href="{{ route('anomali_panas_dangkal.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('anomali_panas_dangkal.destroy', $data->id) }}" method="POST" style="display:inline;">
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
