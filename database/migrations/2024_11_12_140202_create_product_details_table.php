<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('category');  // e.g., 'general_specs', 'display', 'power_and_battery', 'size_and_weight'
            $table->string('key');       // e.g., 'model', 'manufacturer', 'finish', etc.
            $table->string('value');     // e.g., actual value like 'iPhone 12', 'Apple', etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
