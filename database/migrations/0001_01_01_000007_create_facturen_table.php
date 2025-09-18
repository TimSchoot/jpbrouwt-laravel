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
        Schema::create('facturen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bestelling_id')->constrained('bestellingen')->onDelete('cascade');
            $table->string('factuur_nummer', 10);
            $table->date('datum');
            $table->date('vervaldatum');
            $table->boolean('betaald')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('flights');
    }
};