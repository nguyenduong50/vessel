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
        Schema::create('liferafts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('liferafts_no')->nullable();
            $table->string('liferafts_make_and_model')->nullable();
            $table->string('liferafts_type')->nullable();
            $table->string('liferafts_no_of_persons')->nullable();
            $table->string('liferafts_serial_no')->nullable();
            $table->date('liferafts_expiry_date')->nullable();
            $table->string('liferafts_hydrostatic')->nullable();
            $table->string('liferafts_hydrostatic_serial_no')->nullable();
            $table->date('liferafts_hydrostatic_serial_expiry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liferafts');
    }
};
