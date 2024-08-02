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
        Schema::create('generators', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('generator_no')->nullable();
            $table->string('generator_make_and_model')->nullable();
            $table->string('generator_serial_no')->nullable();
            $table->string('generator_ac_dc')->nullable();
            $table->double('generator_kva')->nullable();
            $table->double('generator_volts')->nullable();
            $table->double('generator_phase')->nullable();
            $table->double('generator_frequency')->nullable();
            $table->string('generator_driven_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generators');
    }
};
