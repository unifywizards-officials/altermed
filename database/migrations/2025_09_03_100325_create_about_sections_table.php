<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();

            // Left side images
            $table->string('image_one')->nullable();  
            $table->string('image_two')->nullable();  
            $table->string('arrow_image')->nullable();  
            $table->integer('experience_years')->default(0);  
            $table->string('experience_text')->nullable(); // "Years of experience"

            // Right side content
            $table->string('tagline')->nullable(); // "Results That Speak!"
            $table->string('title')->nullable();   // "Client Success Metrics:"
            $table->text('description')->nullable();

            // List items (appendable array)
            $table->json('list_items')->nullable(); // ["Our Clean Claim Rate - 98%", "Average Revenue Rise - 25%", ...]

            // Button
            $table->string('button_text')->nullable(); 
            $table->string('button_link')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
