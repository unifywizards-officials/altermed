<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'testimonials_items',
        
    ];

       protected $casts = [
        'testimonials_items' => 'array', 
    ];
}
