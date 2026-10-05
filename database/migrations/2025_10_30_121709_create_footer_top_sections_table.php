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
        Schema::create('footer_top_sections', function (Blueprint $table) {
            $table->id();
            $table->string('eyebrow_text')->nullable(); // "Get Started Today"
            $table->string('main_title')->nullable(); // "Credentialing with a"
            $table->string('main_title_highlight')->nullable(); // "Competitive Edge"
            $table->text('description')->nullable(); // Main description text
            $table->string('button_text')->nullable(); // "Book an Appointment"
            $table->string('button_url')->nullable(); // "/contact"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_top_sections');
    }
};
