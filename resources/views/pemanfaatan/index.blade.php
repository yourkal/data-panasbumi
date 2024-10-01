@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Pemanfaatan</h2>
    <a href="{{ route('pemanfaatan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sari</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemanfaatans as $pemanfaatan)
            <tr>
                <td>{{ $pemanfaatan->sari }}</td>
                <td>
                    <a href="{{ route('pemanfaatan.edit', $pemanfaatan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pemanfaatan.destroy', $pemanfaatan->id) }}" method="POST" style="display:inline;">
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
