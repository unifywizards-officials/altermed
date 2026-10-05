<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LicensingServiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'image',
        'heading',
        'short_description',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(LicensingServiceCategory::class, 'category_id');
    }
}
