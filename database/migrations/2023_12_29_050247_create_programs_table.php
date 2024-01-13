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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('program_id');
            $table->string('program_name')->nullable();
            $table->string('program_slug')->nullable();
            $table->integer('is_program_from_master')->default(0);
            $table->integer('department_id')->nullable();
            $table->string('department_name')->nullable();
            $table->string('program_created_by')->nullable();
            $table->string('program_updated_by')->nullable();
            $table->string('program_deleted_by')->nullable();
            $table->string('program_deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
