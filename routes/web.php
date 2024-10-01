<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataUmumController;
use App\Http\Controllers\PenyelidikanController;
use App\Http\Controllers\InformasiGeologiController;
use App\Http\Controllers\InformasiWilayahController;
use App\Http\Controllers\InformasiLembarPetaController;
use App\Http\Controllers\JenisTahapanPenyelidikanController;
use App\Http\Controllers\GeomagnetController;
use App\Http\Controllers\GeolistrikController;
use App\Http\Controllers\GayaBeratController;
use App\Http\Controllers\AudiomagnetotelurikController;
use App\Http\Controllers\MagnetotellurikController;
use App\Http\Controllers\TDEMController;
use App\Http\Controllers\AnomaliPanasDangkalController;
use App\Http\Controllers\InformasiPengeboranController;
use App\Http\Controllers\SistemPanasBumiController;
use App\Http\Controllers\ProspekPanasBumiController;
use App\Http\Controllers\PemanfaatanController;
use App\Http\Controllers\InformasiPemutakhiranController;
use App\Http\Controllers\InformasiGeokimiaController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_umum', [DataUmumController::class, 'index'])->name('data_umum.index'); // Menampilkan semua data
Route::get('/data_umum/create', [DataUmumController::class, 'create'])->name('data_umum.create'); // Menampilkan form tambah data
Route::post('/data_umum', [DataUmumController::class, 'store'])->name('data_umum.store'); // Menyimpan data baru
Route::get('/data_umum/{dataUmum}/edit', [DataUmumController::class, 'edit'])->name('data_umum.edit'); // Menampilkan form edit data
Route::put('/data_umum/{dataUmum}', [DataUmumController::class, 'update'])->name('data_umum.update'); // Mengupdate data
Route::delete('/data_umum/{dataUmum}', [DataUmumController::class, 'destroy'])->name('data_umum.destroy'); // Menghapus data

// Routes untuk Informasi Wilayah
Route::get('/informasi_wilayah', [InformasiWilayahController::class, 'index'])->name('informasi_wilayah.index'); // Menampilkan semua data
Route::get('/informasi_wilayah/create', [InformasiWilayahController::class, 'create'])->name('informasi_wilayah.create'); // Menampilkan form tambah data
Route::post('/informasi_wilayah', [InformasiWilayahController::class, 'store'])->name('informasi_wilayah.store'); // Menyimpan data baru
Route::get('/informasi_wilayah/{informasiWilayah}/edit', [InformasiWilayahController::class, 'edit'])->name('informasi_wilayah.edit'); // Menampilkan form edit data
Route::put('/informasi_wilayah/{informasiWilayah}', [InformasiWilayahController::class, 'update'])->name('informasi_wilayah.update'); // Mengupdate data
Route::delete('/informasi_wilayah/{informasiWilayah}', [InformasiWilayahController::class, 'destroy'])->name('informasi_wilayah.destroy'); // Menghapus data

// Routes untuk Informasi Lembar Peta
Route::get('/informasi_lembarpeta', [InformasiLembarPetaController::class, 'index'])->name('informasi_lembarpeta.index');
Route::get('/informasi_lembarpeta/create', [InformasiLembarPetaController::class, 'create'])->name('informasi_lembarpeta.create');
Route::post('/informasi_lembarpeta', [InformasiLembarPetaController::class, 'store'])->name('informasi_lembarpeta.store');
Route::get('/informasi_lembarpeta/{informasiLembarPeta}/edit', [InformasiLembarPetaController::class, 'edit'])->name('informasi_lembarpeta.edit');
Route::put('/informasi_lembarpeta/{informasiLembarPeta}', [InformasiLembarPetaController::class, 'update'])->name('informasi_lembarpeta.update');
Route::delete('/informasi_lembarpeta/{informasiLembarPeta}', [InformasiLembarPetaController::class, 'destroy'])->name('informasi_lembarpeta.destroy');

// Routes untuk Jenis dan Tahapan Penyelidikan
Route::get('/jenis_tahapan', [JenisTahapanPenyelidikanController::class, 'index'])->name('jenis_tahapan.index');
Route::get('/jenis_tahapan/create', [JenisTahapanPenyelidikanController::class, 'create'])->name('jenis_tahapan.create');
Route::post('/jenis_tahapan', [JenisTahapanPenyelidikanController::class, 'store'])->name('jenis_tahapan.store');
Route::get('/jenis_tahapan/{jenisTahapanPenyelidikan}/edit', [JenisTahapanPenyelidikanController::class, 'edit'])->name('jenis_tahapan.edit');
Route::put('/jenis_tahapan/{jenisTahapanPenyelidikan}', [JenisTahapanPenyelidikanController::class, 'update'])->name('jenis_tahapan.update');
Route::delete('/jenis_tahapan/{jenisTahapanPenyelidikan}', [JenisTahapanPenyelidikanController::class, 'destroy'])->name('jenis_tahapan.destroy');



// Penyelidikan routes
Route::get('/penyelidikan', [PenyelidikanController::class, 'index'])->name('penyelidikan.index');
Route::get('/penyelidikan/create', [PenyelidikanController::class, 'create'])->name('penyelidikan.create');
Route::post('/penyelidikan', [PenyelidikanController::class, 'store'])->name('penyelidikan.store');
Route::get('/penyelidikan/{penyelidikan}/edit', [PenyelidikanController::class, 'edit'])->name('penyelidikan.edit');
Route::put('/penyelidikan/{penyelidikan}', [PenyelidikanController::class, 'update'])->name('penyelidikan.update');
Route::delete('/penyelidikan/{penyelidikan}', [PenyelidikanController::class, 'destroy'])->name('penyelidikan.destroy');

// Geologi routes
Route::get('/geologi', [InformasiGeologiController::class, 'index'])->name('geologi.index');
Route::get('/geologi/create', [InformasiGeologiController::class, 'create'])->name('geologi.create');
Route::post('/geologi', [InformasiGeologiController::class, 'store'])->name('geologi.store');
Route::get('/geologi/{geologi}/edit', [InformasiGeologiController::class, 'edit'])->name('geologi.edit');
Route::put('/geologi/{geologi}', [InformasiGeologiController::class, 'update'])->name('geologi.update');
Route::delete('/geologi/{geologi}', [InformasiGeologiController::class, 'destroy'])->name('geologi.destroy');



Route::get('/geokimia', [InformasiGeokimiaController::class, 'index'])->name('geokimia.index');
Route::get('/geokimia/create', [InformasiGeokimiaController::class, 'create'])->name('geokimia.create');
Route::post('/geokimia', [InformasiGeokimiaController::class, 'store'])->name('geokimia.store');
Route::get('/geokimia/{geokimia}/edit', [InformasiGeokimiaController::class, 'edit'])->name('geokimia.edit');
Route::put('/geokimia/{geokimia}', [InformasiGeokimiaController::class, 'update'])->name('geokimia.update');
Route::delete('/geokimia/{geokimia}', [InformasiGeokimiaController::class, 'destroy'])->name('geokimia.destroy');


Route::get('/geomagnet', [GeomagnetController::class, 'index'])->name('geomagnet.index');
Route::get('/geomagnet/create', [GeomagnetController::class, 'create'])->name('geomagnet.create');
Route::post('/geomagnet', [GeomagnetController::class, 'store'])->name('geomagnet.store');
Route::get('/geomagnet/{geomagnet}/edit', [GeomagnetController::class, 'edit'])->name('geomagnet.edit');
Route::put('/geomagnet/{geomagnet}', [GeomagnetController::class, 'update'])->name('geomagnet.update');
Route::delete('/geomagnet/{geomagnet}', [GeomagnetController::class, 'destroy'])->name('geomagnet.destroy');

Route::get('/geolistrik', [GeolistrikController::class, 'index'])->name('geolistrik.index');
Route::get('/geolistrik/create', [GeolistrikController::class, 'create'])->name('geolistrik.create');
Route::post('/geolistrik', [GeolistrikController::class, 'store'])->name('geolistrik.store');
Route::get('/geolistrik/{geolistrik}/edit', [GeolistrikController::class, 'edit'])->name('geolistrik.edit');
Route::put('/geolistrik/{geolistrik}', [GeolistrikController::class, 'update'])->name('geolistrik.update');
Route::delete('/geolistrik/{geolistrik}', [GeolistrikController::class, 'destroy'])->name('geolistrik.destroy');

Route::get('/gaya_berat', [GayaBeratController::class, 'index'])->name('gaya_berat.index');
Route::get('/gaya_berat/create', [GayaBeratController::class, 'create'])->name('gaya_berat.create');
Route::post('/gaya_berat', [GayaBeratController::class, 'store'])->name('gaya_berat.store');
Route::get('/gaya_berat/{gayaBerat}/edit', [GayaBeratController::class, 'edit'])->name('gaya_berat.edit');
Route::put('/gaya_berat/{gayaBerat}', [GayaBeratController::class, 'update'])->name('gaya_berat.update');
Route::delete('/gaya_berat/{gayaBerat}', [GayaBeratController::class, 'destroy'])->name('gaya_berat.destroy');


// Route untuk Audiomagnetotelurik
Route::get('/audiomagnetotelurik', [AudiomagnetotelurikController::class, 'index'])->name('audiomagnetotelurik.index'); // Menampilkan semua data
Route::get('/audiomagnetotelurik/create', [AudiomagnetotelurikController::class, 'create'])->name('audiomagnetotelurik.create'); // Menampilkan form tambah data
Route::post('/audiomagnetotelurik', [AudiomagnetotelurikController::class, 'store'])->name('audiomagnetotelurik.store'); // Menyimpan data baru
Route::get('/audiomagnetotelurik/{audiomagnetotelurik}/edit', [AudiomagnetotelurikController::class, 'edit'])->name('audiomagnetotelurik.edit'); // Menampilkan form edit data
Route::put('/audiomagnetotelurik/{audiomagnetotelurik}', [AudiomagnetotelurikController::class, 'update'])->name('audiomagnetotelurik.update'); // Mengupdate data
Route::delete('/audiomagnetotelurik/{audiomagnetotelurik}', [AudiomagnetotelurikController::class, 'destroy'])->name('audiomagnetotelurik.destroy'); // Menghapus data

// Route untuk Magnetotellurik
Route::get('/magnetotellurik', [MagnetotellurikController::class, 'index'])->name('magnetotellurik.index'); // Menampilkan semua data
Route::get('/magnetotellurik/create', [MagnetotellurikController::class, 'create'])->name('magnetotellurik.create'); // Menampilkan form tambah data
Route::post('/magnetotellurik', [MagnetotellurikController::class, 'store'])->name('magnetotellurik.store'); // Menyimpan data baru
Route::get('/magnetotellurik/{magnetotellurik}/edit', [MagnetotellurikController::class, 'edit'])->name('magnetotellurik.edit'); // Menampilkan form edit data
Route::put('/magnetotellurik/{magnetotellurik}', [MagnetotellurikController::class, 'update'])->name('magnetotellurik.update'); // Mengupdate data
Route::delete('/magnetotellurik/{magnetotellurik}', [MagnetotellurikController::class, 'destroy'])->name('magnetotellurik.destroy'); // Menghapus data

// Route untuk TDEM
Route::get('/tdem', [TDEMController::class, 'index'])->name('tdem.index'); // Menampilkan semua data
Route::get('/tdem/create', [TDEMController::class, 'create'])->name('tdem.create'); // Menampilkan form tambah data
Route::post('/tdem', [TDEMController::class, 'store'])->name('tdem.store'); // Menyimpan data baru
Route::get('/tdem/{tdem}/edit', [TDEMController::class, 'edit'])->name('tdem.edit'); // Menampilkan form edit data
Route::put('/tdem/{tdem}', [TDEMController::class, 'update'])->name('tdem.update'); // Mengupdate data
Route::delete('/tdem/{tdem}', [TDEMController::class, 'destroy'])->name('tdem.destroy'); // Menghapus data


// Route untuk Anomali Panas Dangkal
Route::get('/anomali_panas_dangkal', [AnomaliPanasDangkalController::class, 'index'])->name('anomali_panas_dangkal.index');
Route::get('/anomali_panas_dangkal/create', [AnomaliPanasDangkalController::class, 'create'])->name('anomali_panas_dangkal.create');
Route::post('/anomali_panas_dangkal', [AnomaliPanasDangkalController::class, 'store'])->name('anomali_panas_dangkal.store');
Route::get('/anomali_panas_dangkal/{anomaliPanasDangkal}/edit', [AnomaliPanasDangkalController::class, 'edit'])->name('anomali_panas_dangkal.edit');
Route::put('/anomali_panas_dangkal/{anomaliPanasDangkal}', [AnomaliPanasDangkalController::class, 'update'])->name('anomali_panas_dangkal.update');
Route::delete('/anomali_panas_dangkal/{anomaliPanasDangkal}', [AnomaliPanasDangkalController::class, 'destroy'])->name('anomali_panas_dangkal.destroy');

// Route untuk Informasi Pengeboran
Route::get('/informasi_pengeboran', [InformasiPengeboranController::class, 'index'])->name('informasi_pengeboran.index');
Route::get('/informasi_pengeboran/create', [InformasiPengeboranController::class, 'create'])->name('informasi_pengeboran.create');
Route::post('/informasi_pengeboran', [InformasiPengeboranController::class, 'store'])->name('informasi_pengeboran.store');
Route::get('/informasi_pengeboran/{informasiPengeboran}/edit', [InformasiPengeboranController::class, 'edit'])->name('informasi_pengeboran.edit');
Route::put('/informasi_pengeboran/{informasiPengeboran}', [InformasiPengeboranController::class, 'update'])->name('informasi_pengeboran.update');
Route::delete('/informasi_pengeboran/{informasiPengeboran}', [InformasiPengeboranController::class, 'destroy'])->name('informasi_pengeboran.destroy');

// Route untuk Sistem Panas Bumi
Route::get('/sistem_panas_bumi', [SistemPanasBumiController::class, 'index'])->name('sistem_panas_bumi.index');
Route::get('/sistem_panas_bumi/create', [SistemPanasBumiController::class, 'create'])->name('sistem_panas_bumi.create');
Route::post('/sistem_panas_bumi', [SistemPanasBumiController::class, 'store'])->name('sistem_panas_bumi.store');
Route::get('/sistem_panas_bumi/{sistemPanasBumi}/edit', [SistemPanasBumiController::class, 'edit'])->name('sistem_panas_bumi.edit');
Route::put('/sistem_panas_bumi/{sistemPanasBumi}', [SistemPanasBumiController::class, 'update'])->name('sistem_panas_bumi.update');
Route::delete('/sistem_panas_bumi/{sistemPanasBumi}', [SistemPanasBumiController::class, 'destroy'])->name('sistem_panas_bumi.destroy');

// Route untuk Prospek Panas Bumi
Route::get('/prospek_panas_bumi', [ProspekPanasBumiController::class, 'index'])->name('prospek_panas_bumi.index');
Route::get('/prospek_panas_bumi/create', [ProspekPanasBumiController::class, 'create'])->name('prospek_panas_bumi.create');
Route::post('/prospek_panas_bumi', [ProspekPanasBumiController::class, 'store'])->name('prospek_panas_bumi.store');
Route::get('/prospek_panas_bumi/{prospekPanasBumi}/edit', [ProspekPanasBumiController::class, 'edit'])->name('prospek_panas_bumi.edit');
Route::put('/prospek_panas_bumi/{prospekPanasBumi}', [ProspekPanasBumiController::class, 'update'])->name('prospek_panas_bumi.update');
Route::delete('/prospek_panas_bumi/{prospekPanasBumi}', [ProspekPanasBumiController::class, 'destroy'])->name('prospek_panas_bumi.destroy');


// Route untuk Pemanfaatan
Route::get('/pemanfaatan', [PemanfaatanController::class, 'index'])->name('pemanfaatan.index');
Route::get('/pemanfaatan/create', [PemanfaatanController::class, 'create'])->name('pemanfaatan.create');
Route::post('/pemanfaatan', [PemanfaatanController::class, 'store'])->name('pemanfaatan.store');
Route::get('/pemanfaatan/{pemanfaatan}/edit', [PemanfaatanController::class, 'edit'])->name('pemanfaatan.edit');
Route::put('/pemanfaatan/{pemanfaatan}', [PemanfaatanController::class, 'update'])->name('pemanfaatan.update');
Route::delete('/pemanfaatan/{pemanfaatan}', [PemanfaatanController::class, 'destroy'])->name('pemanfaatan.destroy');

// Route untuk Informasi Pemutakhiran
Route::get('/informasi_pemutakhiran', [InformasiPemutakhiranController::class, 'index'])->name('informasi_pemutakhiran.index');
Route::get('/informasi_pemutakhiran/create', [InformasiPemutakhiranController::class, 'create'])->name('informasi_pemutakhiran.create');
Route::post('/informasi_pemutakhiran', [InformasiPemutakhiranController::class, 'store'])->name('informasi_pemutakhiran.store');
Route::get('/informasi_pemutakhiran/{informasiPemutakhiran}/edit', [InformasiPemutakhiranController::class, 'edit'])->name('informasi_pemutakhiran.edit');
Route::put('/informasi_pemutakhiran/{informasiPemutakhiran}', [InformasiPemutakhiranController::class, 'update'])->name('informasi_pemutakhiran.update');
Route::delete('/informasi_pemutakhiran/{informasiPemutakhiran}', [InformasiPemutakhiranController::class, 'destroy'])->name('informasi_pemutakhiran.destroy');
