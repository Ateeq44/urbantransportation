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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name')->nullable();

            $table->string('email');
            $table->string('phone');

            $table->string('pickup_address');
            $table->string('pickup_place_id')->nullable();

            $table->string('dropoff_address');
            $table->string('dropoff_place_id')->nullable();

            $table->date('appointment_date');
            $table->time('appointment_time');

            $table->enum('trip_type', ['one-way', 'round'])->default('one-way');

            $table->string('status')->default('new'); // optional

            $table->timestamps();

            $table->index(['email', 'appointment_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
