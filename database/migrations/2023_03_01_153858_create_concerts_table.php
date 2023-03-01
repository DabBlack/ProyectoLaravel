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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 500);
            $table->string('localizacion', 250);
            $table->date('fecha');
            $table->time('hora');
            $table->string('precio', 10);
            $table->string('img_concert');
            $table->unsignedBigInteger('artista_id');
            $table->timestamps();

            $table->foreign('artista_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
