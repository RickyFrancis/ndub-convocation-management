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
            $table->timestamps();
            $table->string('name');
            $table->string('student_id', 50);
            $table->string('program');
            $table->string('batch', 50);
            $table->string('major', 50);
            $table->string('minor', 50);
            $table->year('academic_year');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->string('blood_group', 10);
            $table->integer('credit_earned');
            $table->float('cgpa');
            $table->date('result_publish_date');
            $table->string('passing_trimester', 50);
            $table->boolean('account_clearance');
            $table->float('due_amount', 100);
            $table->boolean('library_clearance');
            $table->boolean('administrative_clearance');
            $table->boolean('department_clearance');
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
