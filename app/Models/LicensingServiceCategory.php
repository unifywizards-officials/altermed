<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LicensingServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'short_description',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(LicensingService::class, 'service_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(LicensingServiceItem::class, 'category_id');
    }
}
