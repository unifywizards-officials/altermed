<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_banner_image',
        'about_title',
        'image_one',
        'image_two',
        'arrow_image',
        'experience_years',
        'experience_text',
        'tagline',
        'title',
        'description',
        'list_items',
        'button_text',
        'button_link',
        'about_page_cta',
        'meta_title',
        'meta_keywords',
        'meta_description',

    ];

    protected $casts = [
        'list_items' => 'array', // json ko array ke roop me use karne ke liye
        'about_page_cta' => 'array',
    ];
}
