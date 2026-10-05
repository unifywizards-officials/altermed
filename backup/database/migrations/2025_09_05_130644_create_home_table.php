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
        Schema::create('home_manage_contents', function (Blueprint $table) {
            $table->id();
            $table->string('home_service_heading')->nullable();
            $table->text('home_service_description')->nullable();
            $table->string('home_why_choose_h1')->nullable();
            $table->string('home_why_choose_h2')->nullable();
            $table->string('home_client_heading')->nullable();
            $table->string('home_different_heading')->nullable();
            $table->string('home_meta_title')->nullable();
            $table->text('home_meta_description')->nullable();
            $table->text('home_meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_manage_contents');
    }
};
