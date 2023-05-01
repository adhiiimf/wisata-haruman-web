<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Travel extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'travelTitle',
        'travelImg-1',
        'travelImg-2',
        'travelImg-3',
        'description',
        'phoneNumber',
        'admins_id'
    ];
}
