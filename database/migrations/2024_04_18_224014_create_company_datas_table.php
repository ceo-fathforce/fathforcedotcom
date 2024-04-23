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
        Schema::create('companydatas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();

            $table->string('completedprojects')->nullable();
            $table->string('totalproducts')->nullable();
            $table->string('satisfiedcostumers')->nullable();
            $table->string('employees')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_data');
    }
};
