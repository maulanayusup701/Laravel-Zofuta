<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gor');
            $table->string('slug_gor')->unique();
            $table->string('alamat_gor');
            $table->string('latitude');
            $table->string('longtitude');
            $table->string('foto_gor');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gors');
    }
};
