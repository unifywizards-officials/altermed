<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'image_path',
        'icon',
        'url',
        'is_active',
        'display_order',
    ];
}


