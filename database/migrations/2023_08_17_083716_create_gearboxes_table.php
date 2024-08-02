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
        Schema::create('gearboxes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('gearbox_no')->nullable();
            $table->string('gearbox_make_and_model')->nullable();
            $table->string('gearbox_serial_no')->nullable();
            $table->string('gearbox_reduction_ratio')->nullable();
            $table->string('gearbox_use')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gearboxes');
    }
};
