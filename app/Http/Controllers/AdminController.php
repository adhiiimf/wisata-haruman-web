<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Travel;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function to login page of admin role
    public function loginpage() {
        return view('auth.admin.Login');
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
            'email' => 'email/kata sandi tidak sesuai',
        ]);
    }

    public function logout() {
        Auth::guard('admins')->logout();
        
        return redirect('/');
    }

    public function dashboard() {
        $admins_id = Auth::user()->first();
        $product_total = Product::where('admins_id',$admins_id['id'])->count();
        $travel_total = Travel::where('admins_id',$admins_id['id'])->count();
        $article_total = Article::where('admins_id',$admins_id['id'])->count();
        return view('pages.admin.Dashboard',[
            'name'=>$admins_id['name'],
            'productTotal'=>$product_total,
            'travelTotal'=>$travel_total,
            'articleTotal'=>$article_total
        ]);
    }
    
}
