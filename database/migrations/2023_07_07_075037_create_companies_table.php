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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->text('represent')->nullable();
            $table->text('represent_email')->nullable();
            $table->text('represent_phone')->nullable();
            $table->text('company_address')->nullable();
            $table->text('company_website')->nullable();
            $table->text('company_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
