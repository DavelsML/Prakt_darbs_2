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
        // Create the deliveries table
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();  // Primary key 'id'
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        // Create the products table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('qty');
            $table->decimal('price', 8, 2);  // Scale and precision for price
            $table->text('description');

            // Define delivery_id column for foreign key reference
            $table->unsignedBigInteger('delivery_id')->nullable();

            // Foreign key constraint linking to deliveries
            $table->foreign('delivery_id')
                  ->references('id')
                  ->on('deliveries')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the products table first to avoid foreign key constraint violation
        Schema::dropIfExists('products');

        // Drop the deliveries table
        Schema::dropIfExists('deliveries');
    }
};




