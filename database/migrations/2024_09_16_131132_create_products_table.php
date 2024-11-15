<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('products')) {

            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('subcategory_id');
                $table->string('name');
                $table->text('description');
                $table->decimal('price', 8, 2);
                $table->string('model');
                $table->string('color');
                $table->string('warranty')->nullable();
                $table->string('payment_and_credit')->nullable();
                $table->string('image');
                $table->boolean('featured')->default(false);

                $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};