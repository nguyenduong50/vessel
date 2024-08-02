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
        Schema::create('pyrotechnics', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('vessel_index')->nullable();
            $table->string('pyrotechnics_type')->nullable(); 
            $table->double('pyrotechnics_quantity')->nullable(); 
            $table->date('pyrotechnics_expiry_date')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pyrotechnics');
    }
};
