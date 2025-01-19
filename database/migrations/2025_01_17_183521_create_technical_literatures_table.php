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
        Schema::create('technical_literatures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->string('product_serial')->nullable();
            $table->string('machine_serial')->nullable();
            $table->string('company_name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->bigInteger('country')->nullable();
            $table->bigInteger('state')->nullable();
            $table->bigInteger('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_literatures');
    }
};
