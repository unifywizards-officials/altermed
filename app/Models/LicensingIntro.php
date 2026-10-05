<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicensingIntro extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'button_text',
    ];
}
