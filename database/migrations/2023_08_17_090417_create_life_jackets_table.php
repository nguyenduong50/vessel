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
        Schema::create('life_jackets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vessel_index')->nullable();
            $table->string('life_jackets_type')->nullable();
            $table->string('life_jackets_make_and_model')->nullable();
            $table->double('life_jackets_quantity')->nullable();
            $table->string('life_jackets_serial_no')->nullable();
            $table->string('life_jackets_seft_activating_light')->nullable();
            $table->date('life_jackets_seft_activating_light_expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('life_jackets');
    }
};
