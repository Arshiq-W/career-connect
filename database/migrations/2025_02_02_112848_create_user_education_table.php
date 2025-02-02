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
        Schema::create('user_education', function (Blueprint $table) {
            $table->id();
            $table->string('university')->nullable();
            $table->string('country')->nullable();
            $table->string('degree')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('start_date')->nullable();
            $table->string('start_month')->nullable();
            $table->string('end_date')->nullable();
            $table->string('end_month')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_education');
    }
};
