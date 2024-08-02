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
        Schema::create('auxiliary_engines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('aux_no')->nullable();
            $table->string('aux_make_and_model')->nullable();
            $table->string('aux_serial_no')->nullable();
            $table->double('aux_max_power')->nullable();
            $table->double('aux_rpm')->nullable();
            $table->string('aux_location')->nullable();
            $table->string('aux_use')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auxiliary_engines');
    }
};
