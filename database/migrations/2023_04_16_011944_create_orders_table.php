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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('delivery_man_id')->nullable()->default(null);
            $table->foreign('delivery_man_id')->references('id')->on('delivery_men')->onDelete('set null');
            $table->string('order_number');
            $table->double('total',255,2);
            $table->integer('status')->default(1); //1=>preparing, 2=>On the way, 3=>completed, 0=>canceled
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
