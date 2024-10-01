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
    Schema::create('penyelidikan', function (Blueprint $table) {
        $table->id();
        $table->string('judul_laporan')->nullable();
        $table->string('penyelidik')->nullable();
        $table->year('tahun')->nullable();
        $table->string('hasil_yang_diselidiki')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyelidikan');
    }
};
