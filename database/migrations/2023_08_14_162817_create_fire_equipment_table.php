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
        Schema::create('fire_equipment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('fire_equipment_type')->nullable(); 
            $table->string('fire_equipment_make_and_model')->nullable(); 
            $table->double('fire_equipment_capacity')->nullable(); 
            $table->double('fire_equipment_quantity')->nullable(); 
            $table->date('fire_equipment_expiry_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_equipment');
    }
};
