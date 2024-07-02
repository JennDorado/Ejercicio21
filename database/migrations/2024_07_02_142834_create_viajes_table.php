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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('num_plazas');
            $table->string('fecha');
            $table->string('otros_datos');

            $table-> unsignedBigInteger('viajero_id');
            $table->foreign('viajero_id')
            ->references('id')
            ->on('viajeros')->onDelete('cascade');

           

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
