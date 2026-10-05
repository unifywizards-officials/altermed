<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LicensingWhyChooseItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'why_choose_id',
        'name',
        'short_description',
    ];

    public function whyChoose(): BelongsTo
    {
        return $this->belongsTo(LicensingWhyChoose::class, 'why_choose_id');
    }
}
