<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function to login page of admin role
    public function login(){
        return view('auth.admin.login');
    }
    
}
