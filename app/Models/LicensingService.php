<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LicensingService extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(LicensingServiceCategory::class, 'service_id');
    }
}
