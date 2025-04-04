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
        Schema::create('metatags', function (Blueprint $table) {
            $table->id();
            $table->string('page_name', 255);
            $table->string('meta_title', 255);
            $table->text('meta_description');
            $table->text('meta_keywords')->nullable();
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('page_name')
                  ->references('page_name')
                  ->on('pages')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metatags');
    }
};
