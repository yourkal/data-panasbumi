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
    Schema::create('informasi_pemutakhiran', function (Blueprint $table) {
        $table->id();
        $table->string('status')->nullable();
        $table->string('pengisi')->nullable();
        $table->date('tanggal')->nullable();
        $table->string('verifikator')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pemutakhiran');
    }
};
