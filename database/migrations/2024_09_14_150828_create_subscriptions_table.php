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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('user_host')->nullable();
            $table->string('password_host')->nullable();
            $table->string('cPanel_link')->nullable();
            $table->string('domain_name')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
};
