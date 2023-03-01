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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('apellidos', 125);
            $table->string('password', 250);
            $table->string('telefono', 50)->nullable();
            $table->string('ciudad', 75)->nullable();
            $table->string('pais', 75)->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('img_user')->default('https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
