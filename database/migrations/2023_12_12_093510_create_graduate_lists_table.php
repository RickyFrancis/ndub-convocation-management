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
            $table->string('name');
            $table->string('student_id', 50);
            $table->string('program');
            $table->string('batch', 50);
            $table->string('department');
            $table->string('major', 50);
            $table->string('minor', 50);
            $table->year('academic_year');
            $table->year('admission_year');
            $table->year('admission_semester');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('blood_group', 10);
            $table->string('nid')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->integer('credit_earned');
            $table->float('cgpa');
            $table->date('result_publish_date');
            $table->date('dob');
            $table->string('passing_trimester', 50);
            $table->string('ssc_passing_year', 50);
            $table->string('ssc_result', 50);
            $table->string('hsc_passing_year', 50);
            $table->string('hsc_result', 50);
            $table->boolean('account_clearance');
            $table->float('due_amount', 100);
            $table->boolean('library_clearance');
            $table->boolean('administrative_clearance');
            $table->boolean('department_clearance');
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
