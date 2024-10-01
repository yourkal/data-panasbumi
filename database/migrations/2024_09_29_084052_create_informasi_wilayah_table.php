<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('informasi_wilayah', function (Blueprint $table) {
        $table->id();
        $table->string('nama_daerah')->nullable();
        $table->string('nomor_daerah')->nullable();
        $table->string('pulau')->nullable();
        $table->string('provinsi')->nullable();
        $table->float('posisi_lintang')->nullable();
        $table->float('posisi_bujur')->nullable();
        $table->float('temperatur_manifestasi')->nullable();
        $table->float('geotermometer')->nullable();
        $table->float('top_reservoir')->nullable();
        $table->float('sumber_daya_spekulatif')->nullable();
        $table->float('sumber_daya_hipotetis')->nullable();
        $table->float('cadangan_mungkin')->nullable();
        $table->float('cadangan_terduga')->nullable();
        $table->float('cadangan_terbukti')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_wilayah');
    }
};
