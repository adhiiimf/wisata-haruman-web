<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Article extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'articleTitle',
        'articleImage',
        'content',
        'admins_id'
    ];
}
