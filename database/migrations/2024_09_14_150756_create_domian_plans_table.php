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
        Schema::create('domain_plans', function (Blueprint $table) {
            $table->id();
            $table->string('extension');
            $table->decimal('price_reNew', 6, 2);
            $table->decimal('price_1_year', 8, 2);
            $table->decimal('price_2_years', 10, 2);
            $table->decimal('price_3_years', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_plans');
    }
};
