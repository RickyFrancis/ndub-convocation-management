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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('student_id', 50)->nullable();
            $table->integer('graduate_lists_id')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
			$table->string('photo')->nullable();
			$table->string('role_id')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_slug')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->string('deleted_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
