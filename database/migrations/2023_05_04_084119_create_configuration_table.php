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
            $table->string('name');
            $table->string('logo')->nullable()->default(null);
            $table->string('address');
            $table->string('city');
            $table->string('slogan');
            $table->string('description')->nullable()->default(null);
            $table->string('phone');
            $table->string('email');
            $table->string('working_days');
            $table->string('working_hours');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->timestamps();
        });

        DB::table('configuration')->insert([
            'name' => 'Restaurant',
            'address' => 'Avenue M5, Rabat, Agdal, Morocco',
            'email' => 'default@example.com',
            'phone' => '1234567890',
            'city' => 'Rabat',
            'slogan' => 'Bringing the world to your plate',
            'working_days' => 'Monday to Sunday',
            'working_hours' => '07:00AM to 22:00PM',
            'secondary_color' => '#F82647',
            'primary_color' => '#000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration');
    }
};
