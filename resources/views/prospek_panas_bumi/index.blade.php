@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Prospek Panas Bumi</h2>
    <a href="{{ route('prospek_panas_bumi.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Sari</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prospekPanasBumi as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->sari }}</td>
                <td>
                    @if($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" width="100" />
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <a href="{{ route('prospek_panas_bumi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('prospek_panas_bumi.destroy', $data->id) }}" method="POST" style="display:inline;">
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
