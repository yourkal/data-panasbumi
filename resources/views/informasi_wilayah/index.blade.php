@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informasi Wilayah</h2>
    <a href="{{ route('informasi_wilayah.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Daerah</th>
                <th>Nomor Daerah</th>
                <th>Pulau</th>
                <th>Provinsi</th>
                <th>Posisi Lintang</th>
                <th>Posisi Bujur</th>
                <th>Temperatur Manifestasi (°C)</th>
                <th>Geotermometer (°C)</th>
                <th>Top Reservoir (mdpl)</th>
                <th>Sumber Daya Spekulatif (MWe)</th>
                <th>Sumber Daya Hipotetis (MWe)</th>
                <th>Cadangan Mungkin (MWe)</th>
                <th>Cadangan Terduga (MWe)</th>
                <th>Cadangan Terbukti (MWe)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informasiWilayah as $informasi)
                <tr>
                    <td>{{ $informasi->nama_daerah }}</td>
                    <td>{{ $informasi->nomor_daerah }}</td>
                    <td>{{ $informasi->pulau }}</td>
                    <td>{{ $informasi->provinsi }}</td>
                    <td>{{ $informasi->posisi_lintang }}</td>
                    <td>{{ $informasi->posisi_bujur }}</td>
                    <td>{{ $informasi->temperatur_manifestasi }}</td>
                    <td>{{ $informasi->geotermometer }}</td>
                    <td>{{ $informasi->top_reservoir }}</td>
                    <td>{{ $informasi->sumber_daya_spekulatif }}</td>
                    <td>{{ $informasi->sumber_daya_hipotetis }}</td>
                    <td>{{ $informasi->cadangan_mungkin }}</td>
                    <td>{{ $informasi->cadangan_terduga }}</td>
                    <td>{{ $informasi->cadangan_terbukti }}</td>
                    <td>
                        <a href="{{ route('informasi_wilayah.edit', $informasi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('informasi_wilayah.destroy', $informasi->id) }}" method="POST" style="display:inline;">
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
