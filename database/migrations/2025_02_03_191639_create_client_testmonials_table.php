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
        Schema::create('client_testmonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('job_title');
            $table->string('testmonial');
            $table->integer('rating');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_testmonials');
    }
};
