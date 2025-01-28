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
        Schema::create('soil_tests', function (Blueprint $table) {
            $table->id();
            $table->string('soil_type');
        $table->decimal('pH', 5, 2);
        $table->decimal('nitrogen', 8, 2);
        $table->decimal('phosphorus', 8, 2);
        $table->decimal('potassium', 8, 2);
        $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soil_tests');
    }
};
