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
        Schema::create('about_stats_sections', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->nullable();
            $table->string('main_title_highlight')->nullable();
            $table->json('stats_items')->nullable(); // For the 6 stat cards
            $table->string('bottom_title')->nullable(); // "500+"
            $table->string('bottom_subtitle')->nullable(); // "Dedicated Employees"
            $table->json('bottom_images')->nullable(); // Array of image paths
            $table->text('bottom_description')->nullable();
            $table->text('right_content')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_stats_sections');
    }
};
