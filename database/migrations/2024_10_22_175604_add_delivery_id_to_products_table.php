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
    Schema::table('products', function (Blueprint $table) {
        // Assuming deliveries table has a primary key named 'id'
        $table->unsignedBigInteger('delivery_id')->nullable()->after('description'); // foreign key
        $table->foreign('delivery_id')->references('id')->on('deliveries')->onDelete('cascade'); // add the foreign key constraint
    });
    }

public function down()
    {
    Schema::table('products', function (Blueprint $table) {
        $table->dropForeign(['delivery_id']);
        $table->dropColumn('delivery_id');
    });
    }
};
