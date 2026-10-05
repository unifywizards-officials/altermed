<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutStatsSection extends Model
{
    protected $fillable = [
        'main_title',
        'main_title_highlight',
        'stats_items',
        'bottom_title',
        'bottom_subtitle',
        'bottom_images',
        'bottom_description',
        'right_content',
        'button_text',
        'button_url',
    ];

    protected $casts = [
        'stats_items' => 'array',
        'bottom_images' => 'array',
    ];
}
