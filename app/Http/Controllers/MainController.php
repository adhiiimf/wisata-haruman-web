<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Travel;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landingpage() {
        $product_data = Product::orderBy('created_at','desc')->get();
        $travel_data = Travel::orderBy('created_at','desc')->get();
        return view('Main',[
            'product_data' => $product_data,
            'travel_data' => $travel_data
        ]);
    }
}
