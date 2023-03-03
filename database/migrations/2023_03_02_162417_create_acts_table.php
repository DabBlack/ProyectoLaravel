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
        Schema::create('acts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->unsignedBigInteger('concierto_id');
            $table->timestamps();

            $table->foreign('artista_id')->references('id')->on('artists');
            $table->foreign('concierto_id')->references('id')->on('concerts');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acts');
    }
};
