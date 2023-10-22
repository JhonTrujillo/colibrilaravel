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
        Schema::create('contactenos', function (Blueprint $table) {
            $table->id();
            $table->string("nombres", 30)->nullable(true);
            $table->string("apellidos", 30)->nullable(true);
            $table->integer("cedula")->nullable(true);
            $table->string("correo")->unique();
            $table->string("usuario")->nullable(true);
            $table->string("observaciones")->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactenos');
    }
};
