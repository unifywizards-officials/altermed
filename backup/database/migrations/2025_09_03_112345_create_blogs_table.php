<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            // Core
            $table->string('name')->nullable();                 // e.g. author or label
            $table->string('title');                            // blog title
            $table->string('heading')->nullable();              // optional heading/subtitle
            $table->string('slug')->unique();                   // SEO slug
            $table->string('image')->nullable();                // cover image path

            // Content
            $table->text('short_description')->nullable();
            $table->longText('long_description');              // Summernote HTML

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();       // comma separated

            // Publish
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
