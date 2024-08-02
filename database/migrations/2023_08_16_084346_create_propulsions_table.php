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
        Schema::create('propulsions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->foreignId('type_propulsion_id')->constrained('type_propulsions')->default(1);
            $table->double('propulsion_quantity')->nullable();
            $table->string('propeller_make_model')->nullable();
            $table->string('propeller_material')->nullable();
            $table->string('propeller_diameter')->nullable();
            $table->string('shaft_make_model')->nullable();
            $table->string('shaft_material')->nullable();
            $table->string('shaft_diameter')->nullable();
            $table->string('water_jet_make_model')->nullable();
            $table->string('water_jet_serial_no')->nullable();
            $table->string('water_jet_diameter')->nullable();
            $table->string('propulsion_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propulsions');
    }
};
