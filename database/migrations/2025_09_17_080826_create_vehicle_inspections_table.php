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
        Schema::create('vehicle_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->date('inspection_date');
            $table->string('inspector_name');
            $table->integer('odometer_reading')->nullable();
            $table->string('fuel_level')->nullable();

            $table->string('brake_condition')->nullable();
            $table->string('tire_condition')->nullable();
            $table->string('lamp_condition')->nullable();
            $table->string('body_right')->nullable();
            $table->string('body_left')->nullable();
            $table->string('body_front')->nullable();
            $table->string('body_back')->nullable();
            $table->string('door_lock_condition')->nullable();
            $table->string('cargo_space_cleanliness')->nullable();
            $table->string('safety_equipment')->nullable();
            $table->string('engine_sound')->nullable();
            $table->string('oil_level')->nullable();
            $table->string('coolant_level')->nullable();

            $table->text('notes')->nullable();
            $table->enum('status', ['fit', 'unfit'])->default('fit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_inspections');
    }
};
