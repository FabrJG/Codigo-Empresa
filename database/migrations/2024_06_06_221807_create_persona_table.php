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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido');
            $table->char('cPerNombre');
            $table->string('cPerDireccion');
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo');
            $table->string('cPerRnd');
            $table->char('nPerEstado');
            $table->string('remember_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
