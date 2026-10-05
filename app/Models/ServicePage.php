<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_banner_image',
        'service_banner_title',
        'service_banner_details',
        'service_image',
        'service_title',
        'service_description',
        'acquire_heading',
        'acquire_title',
        'icon',
        'icon_title',
        'icon_heading',
        'description',
        'faq_title',
        'faq_heading',
        'image_why_choose',
        'why_choose_title',
        'why_choose_heading',
        'whychoos_name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'home_image',
        'show_on_home',
        'is_active',
        'service_type',
        'status',
    ];

    protected $casts = [
        'acquire_title'   => 'array',
        'icon'            => 'array',
        'icon_title'      => 'array',
        'icon_heading'    => 'array',
        'faq_title'       => 'array',
        'faq_heading'     => 'array',
        'whychoos_name'   => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
