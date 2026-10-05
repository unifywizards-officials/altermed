<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeManageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_service_heading',
        'home_service_description',
        'home_why_choose_h1',
        'home_why_choose_h2',
        'home_client_heading',
        'home_different_heading',
        'home_meta_title',
        'home_meta_description',
        'home_meta_keywords',
        'home_cta',
    ];

    protected $casts = [
        'home_cta' => 'array',
    ];
}