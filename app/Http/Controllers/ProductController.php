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
        $admins_id = explode(' ',$admins_id->name)[0];
        return view('pages.admin.Product',[
            'admin_name' => $admins_id,
            'product_data' => $product_data
        ]);
    }

    public function showIndex(Request $request) {
        $admins_id = Auth::user()->first();
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        return view('pages.admin.ViewProduct',[
            'product_data' => $product_data
        ]);
    }

    public function guestShowAll(Request $request) {
        $product_data = Product::orderBy('created_at','desc')->get();
        return view('pages.guest.Product',[
            'product_data' => $product_data
        ]);
    }

    public function guestShowPage(Request $request) {
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        return view('pages.guest.ViewProduct',[
            'product_data' => $product_data
        ]);
    }

    public function isDelete(Request $request) {
        $admins_id = Auth::user()->first();
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        if (!$product_data) {
            return redirect('/404');
        }
        return view('pages.admin.DeleteProduct',[
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
             'price' => 'required',
             'stocks' => 'required',
             'isPreorder' => 'required',
             'phoneNumber' => 'required'
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
                'price' => $request->price,
                'stocks' => $request->stocks,
                'isPreorder' => $request->isPreorder,
                'phoneNumber' => $request->phoneNumber,
                'admins_id' => $admins_id['id']
        ]);
        return redirect('/adminProduct');
    }

    public function edit(Request $request)
    {
        $product_data = Product::join('admins','admins.id','=','products.admins_id')->where('products.id',$request->product_id)->select('products.*','admins.name')->first();
        return view('pages.admin.EditProduct',[
            'product' => $product_data,
        ]);
    }

    public function update(Request $request)
    {
        $admins_id = Auth::user()->first();
        $this->validate($request, [
            'productTitle' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stocks' => 'required',
            'isPreorder' => 'required',
            'phoneNumber' => 'required'
        ]);
        $product_data = Product::where('products.id',$request->product_id)->first();
        if ($admins_id->id == $product_data->admins_id) {
            Product::where('products.id',$request->product_id)->update([
                'productTitle' => $request->productTitle,
                'description' => $request->description,
                'price' => $request->price,
                'stocks' => $request->stocks,
                'isPreorder' => $request->isPreorder,
                'phoneNumber' => $request->phoneNumber,
            ]);
            return redirect('/adminProduct')->with(['success' => 'Produk Berhasil Diperbarui']);
        }else {
            return view('errors.404');
        }
    }
}
