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
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('program_id')->nullable();
            $table->integer('batch_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('major')->nullable();
            $table->string('minor')->nullable();
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
            $table->string('blood_group')->nullable();
            $table->string('nid_or_birth_cert_no')->nullable();
            $table->integer('nid1_or_birth_cert2_status')->nullable();
            $table->string('credit_earned')->nullable();
            $table->double('cgpa')->nullable();
            $table->string('result_publish_date')->nullable();
            $table->string('dob')->nullable();
            $table->string('passing_trimester')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('ssc_institute')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_passing_year')->nullable();
            $table->string('ssc_result', 50)->nullable();
            $table->string('ssc_certificate_photo')->nullable();
            $table->string('hsc_institute')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_group')->nullable();
            $table->string('hsc_passing_year')->nullable();
            $table->string('hsc_result', 50)->nullable();
            $table->string('hsc_certificate_photo')->nullable();
            $table->string('bachelor_institute')->nullable();
            $table->string('bachelor_board')->nullable();
            $table->string('bachelor_group')->nullable();
            $table->string('bachelor_passing_year')->nullable();
            $table->string('bachelor_result', 50)->nullable();
            $table->string('masters_institute')->nullable();
            $table->string('masters_board')->nullable();
            $table->string('masters_group')->nullable();
            $table->string('masters_passing_year')->nullable();
            $table->string('masters_result', 50)->nullable();
            $table->string('guest1_name')->nullable();
            $table->string('guest1_relationship')->nullable();
            $table->string('guest1_nid_or_birth_cert')->nullable();
            $table->integer('guest1_nid1_or_birth_cert2_status')->nullable();
            $table->string('guest1_present_address')->nullable();
            $table->string('guest1_permanent_address')->nullable();
            $table->string('guest1_photo')->nullable();
            $table->string('guest2_name')->nullable();
            $table->string('guest2_relationship')->nullable();
            $table->string('guest2_nid_or_birth_cert')->nullable();
            $table->integer('guest2_nid1_or_birth_cert2_status')->nullable();
            $table->string('guest2_present_address')->nullable();
            $table->string('guest2_permanent_address')->nullable();
            $table->string('guest2_photo')->nullable();
            $table->string('student_photo')->nullable();
            $table->integer('second_program_grad_list_id')->nullable();
            $table->boolean('account_clearance')->nullable();
            $table->double('due_amount')->nullable();
            $table->boolean('library_clearance')->nullable();
            $table->boolean('administrative_clearance')->nullable();
            $table->boolean('department_clearance')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->string('deleted_at')->nullable();
            $table->string('edit_start_status')->default(0);
            $table->string('child_account_status')->default(0);
            $table->integer('parent_account_status')->default(0);
            $table->string('registration_complete_status')->default(0);
            $table->integer('payment_status')->default(0);
            $table->integer('payment_table_id')->nullable();
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
