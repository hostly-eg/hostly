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
        Schema::create('domain_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('dns1')->nullable();
            $table->string('dns2')->nullable();
            $table->string('dns3')->nullable();
            $table->string('dns4')->nullable();
            $table->foreignId('order_id')->constrained('orders');
            $table->timestamp('start_date')->useCurrent();
            $table->dateTime('end_date')->nullable();
            $table->enum('status', ['active', 'pending' ,'ended', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_subscriptions');
    }
};
