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
        Schema::create('inspection_weeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id')->index();
            $table->unsignedBigInteger('driver_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('inspector_date_start')->nullable();
            $table->string('inspector_date_end')->nullable();
            $table->string('body_right')->nullable();
            $table->string('body_left')->nullable();
            $table->string('body_front')->nullable();
            $table->string('body_back')->nullable();
            $table->string('door_lock_condition')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_weeks');
    }
};
