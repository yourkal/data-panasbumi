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
    Schema::create('jenis_tahapan_penyelidikan', function (Blueprint $table) {
        $table->id();
        $table->string('tahap_penyelidikan')->nullable();
        $table->string('metode_penyelidikan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_tahapan_penyelidikan');
    }
};
