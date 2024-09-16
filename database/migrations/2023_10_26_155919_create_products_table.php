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
            $table->string('name', 256)->nullable(false)->unique();
            $table->string('description', 256)->nullable(false)->default('');
            $table->string('imgUrl', 256)->nullable(false);
            $table->decimal('price')->nullable(false);
            $table->decimal('discountPercent')->nullable(true);
            $table->datetime('discountStart_at')->nullable(true);
            $table->datetime('discountEnd_at')->nullable(true);
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
