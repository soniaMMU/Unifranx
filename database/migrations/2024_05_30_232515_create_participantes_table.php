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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('nom_p');
            $table->string('app_p');
            $table->string('apm_p');
            $table->integer('ci_p');
            $table->integer('c1_p');
            $table->integer('c2_p');
            $table->string('corr_p')->unique();//correos unicos y no repetibles
            $table->string('carr_p')->nullable();
            $table->string('org_p')->nullable();
            $table->string('est_p');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
