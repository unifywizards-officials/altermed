<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterTopSection extends Model
{
    protected $fillable = [
        'eyebrow_text',
        'main_title',
        'main_title_highlight',
        'description',
        'button_text',
        'button_url',
    ];
}
