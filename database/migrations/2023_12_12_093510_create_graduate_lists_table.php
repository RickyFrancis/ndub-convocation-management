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
        Schema::create('graduate_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('program')->nullable();
            $table->integer('batch')->nullable();
            $table->integer('department')->nullable();
            $table->string('major')->nullable();
            $table->string('minor')->nullable();
            $table->string('academic_year_from')->nullable();
            $table->string('academic_year_to')->nullable();
            $table->string('admission_year')->nullable();
            $table->string('admission_semester')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('designation')->nullable();
            $table->text('office_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('nid')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->integer('credit_earned')->nullable();
            $table->float('cgpa')->nullable();
            $table->string('result_publish_date')->nullable();
            $table->string('dob')->nullable();
            $table->string('passing_trimester')->nullable();
            $table->string('ssc_institute')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_passing_year')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('ssc_certificate_photo')->nullable();
            $table->string('hsc_institute')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_passing_year')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('hsc_certificate_photo')->nullable();
            $table->string('guest1_name')->nullable();
            $table->string('guest1_relationship')->nullable();
            $table->string('guest1_nid')->nullable();
            $table->string('guest1_present_address')->nullable();
            $table->string('guest1_permanent_address')->nullable();
            $table->string('guest1_photo')->nullable();
            $table->string('guest2_name')->nullable();
            $table->string('guest2_relationship')->nullable();
            $table->string('guest2_nid')->nullable();
            $table->string('guest2_present_address')->nullable();
            $table->string('guest2_permanent_address')->nullable();
            $table->string('guest2_photo')->nullable();
            $table->string('student_photo')->nullable();
            $table->integer('second_program_graduate_list_table_id')->nullable();
            $table->boolean('account_clearance')->nullable();
            $table->float('due_amount')->nullable();
            $table->boolean('library_clearance')->nullable();
            $table->boolean('administrative_clearance')->nullable();
            $table->boolean('department_clearance')->nullable();
            $table->string('graduate_list_created_by')->nullable();
            $table->string('graduate_list_updated_by')->nullable();
            $table->string('graduate_list_deleted_by')->nullable();
            $table->string('graduate_list_deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduate_lists');
    }
};
