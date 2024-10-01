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
    Schema::create('data_umum', function (Blueprint $table) {
        $table->id(); // Auto-incrementing ID
        $table->string('jenis_laporan')->nullable();
        $table->string('judul_laporan')->nullable();
        $table->string('instansi_pelapor')->nullable();
        $table->string('penulis_laporan')->nullable();
        $table->string('sumber_data')->nullable();
        $table->timestamps(); // created_at, updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_umum');
    }
};
