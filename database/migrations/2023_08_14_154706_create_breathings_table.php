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
        Schema::create('breathings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('breathing_apparatus_type')->nullable(); 
            $table->double('breathing_apparatus_quantity')->nullable(); 
            $table->date('breathing_apparatus_expiry_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breathings');
    }
};
