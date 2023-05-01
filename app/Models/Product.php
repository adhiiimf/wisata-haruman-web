<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Product extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'productTitle',
        'productImage',
        'description',
        'stocks',
        'phoneNumber',
        'admins_id'
    ];
}
