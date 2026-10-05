<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_url',
        'image_path',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
        'is_active',
        'display_order',
    ];
}


