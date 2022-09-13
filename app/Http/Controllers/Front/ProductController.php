<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Review;


class ProductController extends FrontController
{
     public function product_details(Request $request)
    {
        $product = Product::where('slug', $request->slug)->first();
        // dd($product);
        $count = $product->reviews->count();
        $fivestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 5)->get();
        $fourstar = Review::where('product_id', '=', $product->id)->where('rating', '=', 4)->get();
        $threestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 3)->get();
        $twostar = Review::where('product_id', '=', $product->id)->where('rating', '=', 2)->get();
        $onestar = Review::where('product_id', '=', $product->id)->where('rating', '=', 1)->get();
        if ($count != 0) {
            $total = 5 * count($fivestar) + 4 * count($fourstar) + 3 * count($threestar) + 2 * count($twostar) + 1 * count($onestar);
            $total_review = count($fivestar) + count($fourstar) + count($threestar) + count($twostar) + count($onestar);
            $average = $total / $total_review;
        }else{
            $average=0;
        }

        return view($this->frontendPagePath . 'product-single', compact('product',  'count', 'fivestar', 'fourstar', 'threestar', 'twostar', 'onestar', 'average'));
    }
}
