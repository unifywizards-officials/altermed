<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'title',
        'quote',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}