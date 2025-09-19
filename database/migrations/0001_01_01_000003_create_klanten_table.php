<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->id();
            $table->integer('klant_nummer')->unique()->nullable();
            $table->string('naam');
            $table->string('email');
            $table->string('straat_postcode')->nullable();
            $table->string('plaats')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('klanten');
    }
};
