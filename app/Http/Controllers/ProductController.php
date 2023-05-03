<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function postProduct(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
             'productTitle' => 'required',
             'productImage' => ['required','mimes:png,jpg,jpeg','max:2048'],
             'description' => 'required',
             'stocks' => 'required',
             'phoneNumber' => 'required'
            //  'admins_id' => 'required'
        ]);   
            // for thumbnail image
        if($request->file('productImage')){
            $file= $request->file('productImage');
            $filename= time().$file->getClientOriginalName();
            $file-> move(public_path('/products'), $filename);
            $thumPath = '/products/'. $filename;
        }

        $post = Product::create([
                'productTitle' => $request->productTitle,
                'productImage' => $thumPath,
                'description' => $request->description,
                'stocks' => $request->stocks,
                'phoneNumber' => $request->phoneNumber,
                'admins_id' => $admins_id['id']
        ]);
        
        echo $post;
        // log result
        dd($post->toArray());
    }
}
