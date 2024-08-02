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
        Schema::create('vessels', function (Blueprint $table) {
            //Basic
            $table->id();
            $table->string('name');
            $table->string('vessel_id')->nullable(); 
            $table->text('amsa_uvi')->nullable();
            $table->text('trailer_reg_no')->nullable();
            $table->text('home_port')->nullable();
            $table->text('builder')->nullable();
            $table->integer('build_year')->nullable();
            $table->text('builders_plate_no')->nullable();
            $table->text('survey_class')->nullable();
            $table->text('survey_authority')->nullable();
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->text('no_of_crew')->nullable();
            $table->text('no_of_pax')->nullable();
            $table->text('no_of_berthed')->nullable();
            $table->text('no_of_unberthed_pax')->nullable();
            $table->date('cos_expiry_date')->nullable();
            $table->date('survey_anniversary_date')->nullable();
            $table->date('class_cert_expiry_date')->nullable();
            $table->date('coo_expiry_date')->nullable();
            $table->date('trailer_reg_expiry_date')->nullable();
            $table->date('rcd_test_expiry_date')->nullable();
            $table->date('megger_test_expiry_date')->nullable();
            $table->date('ecoc_expiry_date')->nullable();
            $table->date('gas_coc_expiry_date')->nullable();
            $table->text('work_order_no')->nullable();
            //Owner
            $table->foreignId('company_id')->constrained('companies')->default(2);
            $table->string('captain')->nullable();
            $table->string('phone_captain')->nullable();
            $table->string('mobile_captain')->nullable();
            $table->string('email_captain')->nullable();
            $table->string('line_manager')->nullable();
            $table->string('phone_line_manager')->nullable();
            $table->string('mobile_line_manager')->nullable();
            $table->string('email_line_manager')->nullable();
            //Hull and Dimension
            $table->string('hull_type')->nullable();
            $table->text('hull_material')->nullable();
            $table->text('make_and_model')->nullable();
            $table->float('loa')->nullable();
            $table->float('measured_length')->nullable();
            $table->float('breadth')->nullable();
            $table->float('depth')->nullable();
            $table->float('draft')->nullable();
            $table->float('full_load_displacement')->nullable();
            //timestamps
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vessels');
    }
};
