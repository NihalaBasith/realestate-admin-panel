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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name', 255)->unique();
            $table->string('heading', 255)->nullable();
            $table->string('subheading', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('section2_heading', 255)->nullable();
            $table->string('section2_subheading', 255)->nullable();
            $table->text('section2_content')->nullable();
            $table->string('section2_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
