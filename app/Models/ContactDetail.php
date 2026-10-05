<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
        'banner_title',
        'heading',
        'description',
        'contact_details',
        'contact_cta',
        'extra_icons',
        'map_url',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    protected $casts = [
        'contact_details' => 'array',
        'contact_cta'     => 'array',
        'extra_icons'     => 'array',
    ];
}
