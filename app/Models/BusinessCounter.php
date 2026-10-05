<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessCounter extends Model
{
    protected $fillable = [
        'icon',
        'counter',
        'counter_text',
        'name',
    ];
}
