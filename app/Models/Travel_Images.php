<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel_Images extends Model
{
    use HasFactory;

    protected $table = 'travels_images';

    protected $fillable = [
        'image_url',
        'admins_id',
        'travels_id'
    ];
}
