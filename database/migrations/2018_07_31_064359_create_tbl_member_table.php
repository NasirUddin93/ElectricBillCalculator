<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_member', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_first_name');
            $table->string('student_last_name');
            $table->string('student_program');
            $table->string('admission_date');
            $table->string('student_contact');
            $table->string('student_email');
            $table->string('student_image');
            $table->string('student_father_name');
            $table->string('student_mother_name');
            $table->string('student_DoB');
            $table->string('student_password');
            $table->integer('approval_status');
            $table->string('student_village');
            $table->string('student_post_office');
            $table->string('student_thana');
            $table->string('student_district');
            $table->string('student_division');
            $table->integer('honours_registration_no');
            $table->integer('honours_roll_no');
            $table->string('honours_result');
            $table->string('honours_institution');
            $table->string('honours_from');
            $table->string('honours_to');
            $table->integer('HSC_registration_no');
            $table->integer('HSC_roll_no');
            $table->string('HSC_result');
            $table->string('HSC_institution');
            $table->string('HSC_from');
            $table->string('HSC_to');
            $table->integer('SSC_registration_no');
            $table->integer('SSC_roll_no');
            $table->string('SSC_result');
            $table->string('SSC_institution');
            $table->string('SSC_from');
            $table->string('SSC_to');
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
        Schema::dropIfExists('tbl_member');
    }
}
