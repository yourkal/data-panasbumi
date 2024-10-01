<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- Sertakan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            height: 100%; /* Pastikan tinggi setiap card sama */
        }

        .row-equal > .col-md-4 {
            display: flex;
            align-items: stretch;
        }
    </style>
</head>

<body>
    <h1 class="text-center my-4">Welcome to the Data Dashboard</h1>

    <main>
        @extends('layouts.app')

        @section('content')
            <div class="container">
                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Umum</h2>
                                <a href="{{ route('data_umum.index') }}" class="btn btn-primary">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Wilayah</h2>
                                <a href="{{ route('informasi_wilayah.index') }}" class="btn btn-success mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Lembar Peta dan Citra</h2>
                                <a href="{{ route('informasi_lembarpeta.index') }}" class="btn btn-success mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Jenis dan Tahapan Penyelidikan</h2>
                                <a href="{{ route('jenis_tahapan.index') }}" class="btn btn-success mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Penyelidikan Yang Telah Dilakukan</h2>
                                <a href="{{ route('penyelidikan.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Geologi</h2>
                                <a href="{{ route('geologi.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Geokimia</h2>
                                <a href="{{ route('geokimia.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Geomagnet</h2>
                                <a href="{{ route('geomagnet.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Geolistrik</h2>
                                <a href="{{ route('geolistrik.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Gaya Berat</h2>
                                <a href="{{ route('gaya_berat.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Audiomagnetotelurik</h2>
                                <a href="{{ route('audiomagnetotelurik.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Magnetotellurik</h2>
                                <a href="{{ route('magnetotellurik.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data TDEM</h2>
                                <a href="{{ route('tdem.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Anomali Panas Dangkal</h2>
                                <a href="{{ route('anomali_panas_dangkal.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Informasi Pengeboran</h2>
                                <a href="{{ route('informasi_pengeboran.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Sistem Panas Bumi</h2>
                                <a href="{{ route('sistem_panas_bumi.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Prospek Panas Bumi</h2>
                                <a href="{{ route('prospek_panas_bumi.index') }}" class="btn btn-primary mb-2">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Pemanfaatan</h2>
                                <a href="{{ route('pemanfaatan.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Data Informasi Pemutakhiran</h2>
                                <a href="{{ route('informasi_pemutakhiran.index') }}" class="btn btn-primary mb-3">Ubah Data Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </main>

    <!-- Sertakan link JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
