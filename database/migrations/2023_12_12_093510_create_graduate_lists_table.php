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
            $table->string('major', 150)->nullable();
            $table->string('minor', 150)->nullable();
            $table->string('admission_year', 150)->nullable();
            $table->string('admission_semester', 150)->nullable();
            $table->string('father_name', 150)->nullable();
            $table->string('mother_name', 150)->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('organization_name', 150)->nullable();
            $table->string('designation', 150)->nullable();
            $table->text('office_address')->nullable();
            $table->string('phone', 150)->nullable();
            $table->string('office_phone', 150)->nullable();
            $table->string('office_mobile', 150)->nullable();
            $table->string('email')->nullable();
            $table->string('blood_group', 150)->nullable();
            $table->string('nid_or_birth_cert_no', 150)->nullable();
            $table->integer('nid1_or_birth_cert2_status')->nullable();
            $table->string('credit_earned')->nullable();
            $table->double('cgpa')->nullable();
            $table->string('result_publish_date', 150)->nullable();
            $table->string('dob')->nullable();
            $table->string('passing_trimester', 150)->nullable();
            $table->string('passing_year', 150)->nullable();
            $table->string('ssc_institute', 150)->nullable();
            $table->string('ssc_board', 150)->nullable();
            $table->string('ssc_group', 150)->nullable();
            $table->string('ssc_passing_year', 150)->nullable();
            $table->string('ssc_result', 50)->nullable();
            $table->string('ssc_certificate_photo')->nullable();
            $table->string('hsc_institute', 150)->nullable();
            $table->string('hsc_board', 150)->nullable();
            $table->string('hsc_group', 150)->nullable();
            $table->string('hsc_passing_year', 150)->nullable();
            $table->string('hsc_result', 50)->nullable();
            $table->string('hsc_certificate_photo')->nullable();
            $table->string('bachelor_institute', 150)->nullable();
            $table->string('bachelor_board', 150)->nullable();
            $table->string('bachelor_group', 150)->nullable();
            $table->string('bachelor_passing_year', 150)->nullable();
            $table->string('bachelor_result', 50)->nullable();
            $table->string('masters_institute', 150)->nullable();
            $table->string('masters_board', 150)->nullable();
            $table->string('masters_group', 150)->nullable();
            $table->string('masters_passing_year', 150)->nullable();
            $table->string('masters_result', 50)->nullable();
            $table->string('others_institute', 150)->nullable();
            $table->string('others_board', 150)->nullable();
            $table->string('others_group', 150)->nullable();
            $table->string('others_passing_year', 150)->nullable();
            $table->string('others_result', 50)->nullable();
            $table->string('guest1_name', 150)->nullable();
            $table->string('guest1_relationship', 150)->nullable();
            $table->string('guest1_nid_or_birth_cert', 150)->nullable();
            $table->string('guest1_nid_or_birth_cert_photo')->nullable();
            $table->integer('guest1_nid1_or_birth_cert2_status')->nullable();
            $table->string('guest1_present_address')->nullable();
            $table->string('guest1_permanent_address')->nullable();
            $table->string('guest1_photo')->nullable();
            $table->string('guest2_name', 150)->nullable();
            $table->string('guest2_relationship', 150)->nullable();
            $table->string('guest2_nid_or_birth_cert', 150)->nullable();
            $table->string('guest2_nid_or_birth_cert_photo')->nullable();
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
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('deleted_at')->nullable();
            $table->integer('edit_start_status')->default(0);
            $table->integer('child_account_status')->default(0);
            $table->integer('parent_account_status')->default(0);
            $table->integer('registration_complete_status')->default(0);
            $table->integer('payment_complete_status')->default(0);
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
