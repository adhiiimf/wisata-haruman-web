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
        'description',
        'phoneNumber',
        'travelStatus',
        'admins_id'
    ];
}
