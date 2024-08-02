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
        Schema::create('e_p_i_r_p_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('epirp_type')->nullable();
            $table->string('epirp_make_and_model')->nullable();
            $table->string('epirp_serial_no')->nullable(); 
            $table->date('epirp_battery_expiry_date')->nullable();
            $table->date('epirp_asma_expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_p_i_r_p_s');
    }
};
