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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('article');
            $table->text('price');
            $table->boolean('is_promotion')->default(0);
            $table->integer ('%_promotion');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('warranty_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->text('material')->nullable();//несколько значений
            $table->string('country');
            $table->integer ('weight');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->nullOnDelete();
            $table->foreign('warranty_id')->references('id')->on('warranties')->nullOnDelete();
            $table->foreign('color_id')->references('id')->on('colors')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
