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
        Schema::create('server_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->constrained('servers');
            $table->integer('CPUCores');
            $table->integer('RAMGB');
            $table->integer('disk_spaceGB');
            $table->string('operating_system', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_configurations');
    }
};
