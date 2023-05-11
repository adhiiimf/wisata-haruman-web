<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $admins_id = Auth::user()->first();
        $product_data = Product::where('admins_id',$admins_id['id'])->orderBy('created_at','desc')->get();
        // return $product_data;
        return view('pages.admin.product',[
            'product_data' => $product_data
        ]);
    }

    public function showIndex(Request $request) {
        $admins_id = Auth::user()->first();
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        // return $product_data;
        return view('pages.admin.viewproduct',[
            'product_data' => $product_data
        ]);
    }

    public function isDelete(Request $request) {
        $admins_id = Auth::user()->first();
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        // return $product_data;
        if (!$product_data) {
            return redirect('/404');
        }
        return view('pages.admin.deleteproduct',[
            'product_data' => $product_data
        ]);
    }

    public function deleteNow(Request $request) {
        $admins_id = Auth::user()->first();
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        if ($product_data->admins_id==$admins_id['id']) {
            $post = Product::where('id',$request->product_id)->delete();
            return redirect('/adminProduct');
        }else {
            return 'You don\'t have permission to delete this data';
        }
    }

    public function postProduct(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
             'productTitle' => 'required',
             'productImage' => ['required','mimes:png,jpg,jpeg'],
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
        
        // dd($post->toArray());
        return redirect('/adminProduct');
    }
}
