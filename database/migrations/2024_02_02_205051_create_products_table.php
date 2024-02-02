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
            $table->string('name', 255)->nullable;
            $table->string('barcode', 255);
            $table->decimal('cost', 10,2)->default(0);
            $table->decimal('price', 10,2)->default(0);
            $table->integer('stock', 11)->nullable;
            $table->integer('alerts', 11)->nullable;
            $table->string('image', 55)->nullable;
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
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
