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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('store_id')->constrained()->onDelete('restrict');
            $table->decimal('total', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('payable', 10, 2);
            $table->enum('status', ['pending', 'out for delivery', 'delivered', 'returned']);
            $table->string('store_name');
            $table->string('store_address');
            $table->string('store_phone')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
