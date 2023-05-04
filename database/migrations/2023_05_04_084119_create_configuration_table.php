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
        Schema::create('configuration', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('logo');
            $table->string('slogan');
            $table->string('description');
            $table->string('phone');
            $table->string('email');
            $table->string('working_days');
            $table->string('working_hours');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration');
    }
};
