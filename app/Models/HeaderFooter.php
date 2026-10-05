<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderFooter extends Model
{
    protected $fillable = [
        'header_logo',
        'footer_logo',
        'footer_logo_content',
        'newsletter_content',
        'instagram_images',
    ];

    protected $casts = [
        'instagram_images' => 'array',
    ];
}
