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
    Schema::create('sistem_panas_bumi', function (Blueprint $table) {
        $table->id();
        $table->text('batuan_reservoir')->nullable();
        $table->text('batuan_penudung')->nullable();
        $table->text('sumber_panas')->nullable();
        $table->text('sari')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistem_panas_bumi');
    }
};
