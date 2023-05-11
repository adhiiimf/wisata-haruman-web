<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class TravelSchedule extends Model
{
    use HasFactory, Uuid;

    protected $table = 'travel_schedules';

    protected $fillable = [
        'name'
    ];
}
