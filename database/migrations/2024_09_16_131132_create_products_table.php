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
                $table->string('warranty')->nullable();
                $table->string('qr_code')->nullable();
                $table->string('sku')->nullable();
                $table->string('payment_and_credit')->nullable();
                $table->string('main_avatar');
                $table->string('avatar_2')->nullable();
                $table->string('avatar_3')->nullable();
                $table->string('avatar_4')->nullable();
                $table->string('avatar_5')->nullable();
                $table->string('avatar_6')->nullable();
                $table->string('avatar_7')->nullable();
                $table->unsignedBigInteger('tag_id')->nullable();
                $table->boolean('featured')->default(false);

                $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
                $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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