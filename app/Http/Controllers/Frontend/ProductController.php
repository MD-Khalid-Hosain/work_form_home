<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function listing($slug){
        $categoryCount = Category::where(['slug'=>$slug, 'status'=>1])->count();
        if($categoryCount > 0){
            $categoryDetails = Category::categoryDetails($slug);
            // echo "<pre>"; print_r($categoryDetails); die;
            $categoryProducts = Product::whereIn('category_id', $categoryDetails['catIds'])->where('status',1)->with('productShortDescription')->with('productSpecification')->with('productFetures')->with('productFilter')->get()->toArray();
            // echo "<pre>"; print_r($categoryDetails);

            // echo "<pre>"; print_r($categoryProducts); die;
            return view('Frontend.layouts.product.all_product_list', compact('categoryDetails', 'categoryProducts'));

        }else{
            abort(404);
        }
    }
}
