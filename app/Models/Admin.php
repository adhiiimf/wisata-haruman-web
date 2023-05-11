<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Uuid;

class Admin extends Authenticatable
{
    use HasFactory, Uuid;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    protected $guard = 'admins';
    
    protected $table = 'admins';
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
