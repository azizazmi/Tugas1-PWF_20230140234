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
        $table->id(); // id
        // user_id as foreign key to users table
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        $table->string('name'); // name
        $table->integer('qty'); // qty
        $table->decimal('price', 15, 2); // price
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
