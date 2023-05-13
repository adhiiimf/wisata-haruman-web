<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Images extends Model
{
    use HasFactory;

    protected $table = 'products_images';

    protected $fillable = [
        'image_url',
        'admins_id',
        'travels_id'
    ];
}
