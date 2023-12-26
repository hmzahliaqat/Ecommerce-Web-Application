<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class addToCart extends Controller
{
    function addToCart (Request $request){

carts::create([

    'product_id'=>$request->product_id,
    'user_id'=>Auth::id(),

]);
    }

function removeFromCart(Request $request){

$product=$request->product_id;

carts::where('product_id',$product)->delete();


}


function cart(Request $request,$pid){
$cart=carts::where(['user_id'=>Auth::id(),'product_id'=>$pid])->get();

return $cart;
}

function getCartItem(){
    $userCartItem=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->get();

    return$userCartItem;
}


function getTotalPrice(){
$cartTotalPrice=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->sum(DB::raw('items.price'));

return $cartTotalPrice;
}

function getTotalDelivery(){
    $cartTotaldelivery=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->sum(DB::raw('items.dCharges'));

    return $cartTotaldelivery;
    }


}
