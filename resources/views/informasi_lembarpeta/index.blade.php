@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informasi Lembar Peta dan Citra</h2>
    <a href="{{ route('informasi_lembarpeta.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Peta Topografi/Skala</th>
                <th>Peta Geologi/Skala</th>
                <th>Citra</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataLembarPeta as $data)
                <tr>
                    <td>{{ $data->peta_topografi }}</td>
                    <td>{{ $data->peta_geologi }}</td>
                    <td>{{ $data->citra }}</td>
                    <td>
                        <a href="{{ route('informasi_lembarpeta.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('informasi_lembarpeta.destroy', $data->id) }}" method="POST" style="display:inline;">
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
