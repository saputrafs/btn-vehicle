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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id')->index();
            $table->unsignedBigInteger('driver_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('date_inspection')->nullable();             
            $table->enum('first_check', ['ya', 'tidak'])->nullable();
            $table->enum('oil_engine', ['baik', 'tidak_baik'])->nullable();
            $table->enum('radiator_coolant', ['baik', 'tidak_baik'])->nullable();
            $table->enum('accu', ['baik', 'tidak_baik'])->nullable();
            $table->enum('engine_start', ['ya', 'tidak'])->nullable();
            $table->enum('cleaning', ['ya', 'tidak'])->nullable();
            $table->enum('body_cleanliness', ['bersih', 'kotor'])->nullable();
            $table->enum('interior_cleanliness', ['bersih', 'kotor'])->nullable();
            $table->enum('engine_cleanliness', ['bersih', 'kotor'])->nullable();
            $table->enum('wheel_cleanliness', ['bersih', 'kotor'])->nullable();
            $table->enum('check_vehicle', ['ya', 'tidak'])->nullable();
            $table->enum('brake_light', ['hidup', 'mati'])->nullable();
            $table->enum('turn_signal_light', ['hidup', 'mati'])->nullable();
            $table->enum('headlight', ['hidup', 'mati'])->nullable();
            $table->enum('horn', ['hidup', 'mati'])->nullable();
            $table->enum('tire_condition', ['baik', 'tidak_baik'])->nullable();
            $table->enum('brake_condition', ['baik', 'tidak_baik'])->nullable();
            $table->enum('oil_condition', ['baik', 'tidak_baik'])->nullable();
            $table->enum('wiper_condition', ['baik', 'tidak_baik'])->nullable();
            $table->enum('check_tool', ['ya', 'tidak'])->nullable();
            $table->enum('engine_oil', ['baik', 'tidak_baik'])->nullable();
            $table->enum('spare_tire', ['ada', 'tidak_ada'])->nullable();
            $table->enum('seatbelt', ['baik', 'tidak_baik'])->nullable();
            $table->enum('tools', ['ada', 'tidak_ada'])->nullable();
            $table->enum('warning_triangle', ['ada', 'tidak_ada'])->nullable();
            $table->enum('vehicle_documents', ['ada', 'tidak_ada'])->nullable();
            $table->text('notes')->nullable();
            $table->string('inspector_signature')->nullable();
            $table->string('approver_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
