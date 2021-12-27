<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $categories = Categories::where('is_parent',1)->orderBy('id','desc')->limit(3)->get();
        return view('frontend.index',compact(['banners','categories']));
    }
    public function product_category($slug)
    {
        $category = Categories::with('products')->where('slug',$slug)->first();
        return view('frontend.product-category',compact('category'));
    }
    public function product_details($id)
    {
        $product = Product::where(['status'=>'active','id'=>$id])->get();
        return view('frontend.product_details',compact('product'));
    }
}
