<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function to login page of admin role
    public function loginpage() {
        return view('auth.admin.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function authcheck(Request $request)
    {
        // validate form of email and password fields
        $this->validate($request, [
			'email'      => ['string','required','email'],
			'password'  => ['string','required','min:5'],
		]);
		
		// Attempt to log the user in
		if (Auth::guard('admins')->attempt(
			['email' => $request->email, 'password' => $request->password], true)) {
            $request->session()->regenerate();
			
            return redirect('/adminDashboard');
		}
        
        // if not authorize, redirect to login with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout() {
        Auth::guard('admins')->logout();
 
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
    
}
