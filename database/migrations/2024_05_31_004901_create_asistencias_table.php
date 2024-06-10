<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sesiones_id');
            $table->foreign('sesiones_id')->references('id')->on('sesiones')->onDelete('cascade');
            $table->unsignedBigInteger('participantes_id');
            $table->foreign('participantes_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->timestamp('fh_asis');
            $table->string('st_asis');
            $table->integer('asistencia_confirmada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
