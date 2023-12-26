<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\orderitems;
use App\Models\payments;
use App\Models\shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{

// Number of products seller has
    public function getTotalProducts(){
        $items=items::where('created_by',Auth::id())->take(6)->get();
          return $items;
    }
//count
public function productCount(){
    $totalItems=items::where('created_by',Auth::id())->get();
    $itemCount=$totalItems->count();
    return $itemCount;
}

//get shop details

public function getShopDetails(){

    $shops=shops::where('user_id',Auth::id())->join('users','users.id','=','shops.user_id')->first();

    return $shops;
}

//get orders

public function myOrders(){


  $orderItems=orderitems::where('receiver',Auth::id())->join('items','items.id','=','orderitems.product_id')->get();

  return $orderItems;

}

public function delOrder($id){

orderitems::where('product_id',$id)->delete();

return back();

}


public function orderDetails(){

    return view('pages.sdbextras.orderdetails');
}


public function selectedOrder($id){

    $orderItems=orderitems::where('product_id',$id)->join('items','items.id','=','orderitems.product_id')->first();

   return $orderItems;

    }


    public function revenue(){

       $revenue= payments::where('receiver',Auth::id())->sum('amount');

        return $revenue;

    }


}
