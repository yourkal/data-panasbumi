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
    Schema::create('gaya_berat', function (Blueprint $table) {
        $table->id();
        $table->text('informasi')->nullable();
        $table->text('keterangan')->nullable();
        $table->text('sari_gaya_berat')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaya_berat');
    }
};
