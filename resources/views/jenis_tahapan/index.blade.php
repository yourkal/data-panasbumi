@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Jenis dan Tahapan Penyelidikan</h2>
    <a href="{{ route('jenis_tahapan.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahap Penyelidikan</th>
                <th>Metode Penyelidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataTahapan as $data)
                <tr>
                    <td>{{ $data->tahap_penyelidikan }}</td>
                    <td>{{ $data->metode_penyelidikan }}</td>
                    <td>
                        <a href="{{ route('jenis_tahapan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis_tahapan.destroy', $data->id) }}" method="POST" style="display:inline;">
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
