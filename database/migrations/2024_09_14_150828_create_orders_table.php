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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',50);
            $table->string('phone', 20);
            $table->string('transaction_number', 20);
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('product',100);
            $table->foreignId('hosting_plan_id')->nullable()->constrained('hosting_plans')->cascadeOnDelete();
            $table->foreignId('domain_plan_id')->nullable()->constrained('domain_plans')->cascadeOnDelete();
            $table->foreignId('vps_plan_id')->nullable()->constrained('vps_plans')->cascadeOnDelete();
            $table->smallInteger('num_months');
            $table->decimal('disCount', 8, 2);
            $table->decimal('total', 10, 2);
            $table->string('image_path');
            $table->enum('type', ['new', 're_new'])->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
