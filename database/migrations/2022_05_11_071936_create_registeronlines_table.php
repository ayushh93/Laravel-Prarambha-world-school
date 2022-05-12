<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeronlines', function (Blueprint $table) {
            $table->id();
            $table->string('student_image');
            $table->string('student_name');
            $table->date('date_of_birth');
            $table->string('birthplace');
            $table->string('gender');            
            $table->string('nationality');
            $table->string('mother_tongue');
            $table->string('religion');
            $table->unsignedInteger('grade');
            $table->year('academic_year');
            $table->string('permanent_address');
            $table->string('current_address');
            $table->longText('last_academic_info');
            $table->longText('curricular_info');
            $table->string('blood_group',3);
            $table->integer('height');
            $table->integer('weight');
            $table->string('medical_issue')->nullable();
            $table->boolean('hostel_service');
            $table->boolean('transport_service');
            $table->string('transport_pickup')->nullable();
            $table->boolean('lunch_service');
            $table->string('lunch_type')->nullable();
            $table->boolean('after_school');
            $table->string('program_kind')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->string('father_contact');
            $table->string('guardian_name');
            $table->string('guardian_contact');
            $table->string('document')->nullable();
            $table->string('submitted_by');
            $table->string('designation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registeronlines');
    }
};
