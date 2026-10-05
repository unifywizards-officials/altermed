<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleDemo extends Model
{
    protected $fillable = [
        'name',
        'mobile_number',
        'email',
        'company_name',
        'number_of_providers',
        'type_of_practice',
        'requirement',
    ];
}
