<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityPolicy extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];
}
