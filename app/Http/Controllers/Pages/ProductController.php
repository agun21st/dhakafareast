<?php

namespace App\Http\Controllers\Pages;

use  App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product()
    {
        $type = "All";
    	$products = Product::orderBy('created_at', 'DESC')->paginate(16);
    	return view('pages.product',compact('products','type'));
    }

    public function product_details($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        if($product){
            return view('pages.product_details',compact('product'));
        }else{
            return view('exceptions.page_not_found');
        }
    }

    public function product_type($product_type)
    {
        $type = $product_type;
        $products = Product::where('product_type',$product_type)->orderBy('created_at', 'DESC')->paginate(16);

    	return view('pages.product',compact('products','type'));
    }

    public function search_by_type(Request $request)
    {
        $type = $request->product_type;
        $terget_view = 'home-product';
        if ($type=="All") {
            $products = Product::orderBy('created_at', 'DESC')->paginate(20);
        } else {
            $products = Product::where('product_type',$request->product_type)->orderBy('created_at', 'DESC')->paginate(20);
        }
        $products->withPath('?product_type='.$type);

        return view('pages.home',compact('products','type','terget_view'));
    }

    public function product_by_type(Request $request)
    {
        $type = $request->product_type;
        if ($type=="All") {
            $products = Product::orderBy('created_at', 'DESC')->paginate(20);
        } else {
            $products = Product::where('product_type',$request->product_type)->orderBy('created_at', 'DESC')->paginate(20);
        }
        $products->withPath('?product_type='.$type);

        return view('pages.product',compact('products','type'));
    }
    
    public function pageNotFound()
    {
        return view('pages.pageNotFound');
    }


}
