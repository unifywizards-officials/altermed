<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();

            // Banner
            $table->string('service_banner_image')->nullable();
            $table->string('service_banner_title')->nullable();
            $table->text('service_banner_details')->nullable();

            // Service main section
            $table->string('service_image')->nullable();
            $table->string('service_title')->nullable();
            $table->longText('service_description')->nullable();

            // Acquire section
            $table->string('acquire_heading')->nullable();
            $table->json('acquire_title')->nullable(); // appendable titles (list)

            // Icons section (appendable)
            $table->json('icon')->nullable();          // icon classes/images
            $table->json('icon_title')->nullable();    // title for each icon
            $table->json('icon_heading')->nullable();  // heading for each icon
            $table->longText('description')->nullable(); // general description below icons

            // FAQ section
            $table->json('faq_title')->nullable();     // appendable faq titles
            $table->json('faq_heading')->nullable();   // appendable faq headings

            // Why choose us section
            $table->string('image_why_choose')->nullable();
            $table->string('why_choose_title')->nullable();
            $table->string('why_choose_heading')->nullable();
            $table->json('whychoos_name')->nullable(); // appendable items list

            // Slug + SEO fields
            $table->string('slug')->unique(); // URL friendly slug
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};
