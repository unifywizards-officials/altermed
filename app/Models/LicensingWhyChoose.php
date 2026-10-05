<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LicensingWhyChoose extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'description',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(LicensingWhyChooseItem::class, 'why_choose_id');
    }
}
