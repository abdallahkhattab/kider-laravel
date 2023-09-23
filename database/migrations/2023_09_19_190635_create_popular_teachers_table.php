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
        Schema::create('popular_teachers', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->longText('description');
            $table->string('teacher_image');
            $table->string('teacher_name');
            $table->string('teacher_job');
            $table->string('teacher_facebook')->nullable();
            $table->string('teacher_twitter')->nullable();
            $table->string('teacher_instagram')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popular_teachers');
    }
};
