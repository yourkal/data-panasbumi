@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data TDEM</h2>
    <a href="{{ route('tdem.create') }}" class="btn btn-primary mb-3">Tambah Data TDEM</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi</th>
                <th>Keterangan</th>
                <th>Sari TDEM</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tdems as $tdem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tdem->informasi }}</td>
                <td>{{ $tdem->keterangan }}</td>
                <td>{{ $tdem->sari_tdem }}</td>
                <td>
                    @if ($tdem->image)
                    <img src="{{ asset('storage/' . $tdem->image) }}" width="100" alt="Image">
                    @else
                    -
                    @endif
                </td>
                <td>
                    <a href="{{ route('tdem.edit', $tdem->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('tdem.destroy', $tdem->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
