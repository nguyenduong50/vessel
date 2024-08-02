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
        Schema::create('main_engines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('main_engine_me_no')->nullable();
            $table->string('main_engine_make_and_model')->nullable();
            $table->string('main_engine_serial_no')->nullable();
            $table->double('main_engine_max_power')->nullable();
            $table->double('main_engine_rpm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_engines');
    }
};
