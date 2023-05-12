<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Travel extends Model
{
    use HasFactory, Uuid;

    protected $table = 'travels';

    protected $fillable = [
        'travelTitle',
        'travelImage',
        'description',
        'phoneNumber',
        'travel_schedules_id',
        'admins_id'
    ];
}
