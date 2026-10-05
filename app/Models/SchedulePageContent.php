<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchedulePageContent extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'form_title',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
