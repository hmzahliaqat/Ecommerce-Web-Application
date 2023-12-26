<?php

namespace App\Http\Controllers;

use App\Models\wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class wishlist extends Controller
{


    public function store(Request $request){

wishlists::create([
    'product_id'=>$request->product_id,
    'user_id'=>Auth::id(),
]);

    }


    public function fetch(Request $request,$pid){


        $wishlistItem=wishlists::where(['user_id'=>Auth::id(),'product_id'=>$pid])->get();

        return $wishlistItem;
    }


    public function remove(Request $request){

        $product_id=$request->product_id;

        wishlists::where(['product_id'=>$product_id,'user_id'=>Auth::id()])->delete();


    }


}
