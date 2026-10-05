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
        Schema::table('service_pages', function (Blueprint $table) {
            if (!Schema::hasColumn('service_pages', 'home_image')) {
                $table->string('home_image')->nullable()->after('meta_keywords');
            }
            if (!Schema::hasColumn('service_pages', 'show_on_home')) {
                $table->boolean('show_on_home')->default(false)->after('home_image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_pages', function (Blueprint $table) {
            $table->dropColumn(['home_image', 'show_on_home']);
        });
    }
};
