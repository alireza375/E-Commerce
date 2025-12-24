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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
             $table->string('user_id');
            $table->string('name');
            $table->string('phone');
            $table->json('shipping_address');
            $table->json('items');
            $table->decimal('total', 8, 2);
            $table->string('status')->default('pending');
            $table->string('method');
            $table->boolean('is_paid')->default(0);
            $table->string('payment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
