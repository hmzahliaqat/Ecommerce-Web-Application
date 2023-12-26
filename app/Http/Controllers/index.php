<?php

namespace App\Http\Controllers;

use App\Models\brands;
use App\Models\carts;
use App\Models\featureds;
use App\Models\items;
use App\Models\orderitems;
use App\Models\orders;
use App\Models\purchased;
use App\Models\shops;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class index extends Controller
{
//To check user logged in
public function isuser(){
    $loggedIn=Auth::id();

    return $loggedIn;
}




public function home(){
 //fetch product from database
      $items=items::paginate(50);
 //Items in user cart

//     $userCartItem=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->get();

//  //count cart items
//  $countCartItems=$userCartItem->count();




//recommendation
if(Auth::check()){
$user=Auth::id();

$purchasedItems=purchased::where('user_id',Auth::id())->get();


if($purchasedItems->isNotEmpty()){
foreach($purchasedItems as $item){

$similarPurchases=purchased::where('user_id','!=',Auth::id())->where('product_id',$item->product_id)->get();

foreach($similarPurchases as $sp){

$recommendation=purchased::where('user_id','!=',Auth::id())->where('user_id',$sp->user_id)->take(8)->join('items','items.id','=','product_id')->get();
}
}
}else{
    $recommendation=null;
}

}else{
$recommendation=null;
}




//featured
$featuredProducts=featureds::join('items','items.id','=','featureds.product_id')->orderBy('count','DESC')->take(10)->get();


//count

$itm=items::get();
$itmc=$itm->count();
    return view('index',[
        'product'=>$items,
        'featured'=>$featuredProducts,
        'recommend'=>$recommendation,
        // 'cartItem'=>$userCartItem,
         'count'=>$itmc,
    ]);
}

//Redirect to product detail page with data

public function redirectToProductDetails($id){



$SelectedItem=items::find($id);

$similarity=items::where('category',$SelectedItem->category)->orWhere('brand',$SelectedItem->brand)->select('*', DB::raw('ABS(price - 100 ) AS distance'))->limit(10)->get();













    $item=items::where('id',$id)->first();

    $shopName=shops::where('user_id',Auth::id())->first();

    $cartItem=carts::where(['user_id'=>Auth::id(),'product_id'=>$id])->select('id')->first();



    return view('pages.productdetails',[
        'pd'=>$item,
        'cart'=>$cartItem,
        'shop'=>$shopName,
        'recommendation'=>$similarity,
    ]);

}
//Redirect to checkout page with data
public function redirectToCheckout(){


    return view('pages.checkout');
}

public function showAllProducts(){
 $items=items::where('created_by',Auth::id())->paginate(50);

    return view('pages.sdbextras.showAllProducts',[
        'products'=>$items,
    ]);
}


public function showAllOrders(){

  $orderItems=orders::join('orderitems','orders.order_id','=','orderitems.order_id')
  ->join('items','orderitems.product_id','=','items.id')->where('orderitems.receiver',Auth::id())->get();


return $orderItems;

}

public function dshop($id){



$items=items::where('category',$id)->get();

    return view('pages.dshop',[
        'products'=>$items,
        'itemId'=>$id,
    ]);
}

public function getFilteredItems($id,Request $request){




 $items=items::where('category',$id)->get();

return $items;

}

public function getBrand(){

    $brandName=brands::get();
return $brandName;
}

public function checkCart(){

 $cart=carts::where('user_id',Auth::id())->get();

return $cart;
}



public function inStock($id){

    items::where('id',$id)->update(array('status'=>1));

    return back();

}


public function outOfStock($id){
    items::where('id',$id)->update(array('status'=>0));
    return back();

}


public function gap(){

   $items=items::get();

   return $items;
}

public function showall(){

    $items=items::paginate(50);

    return view('pages.showall',[
        'product'=>$items,
    ]);
 }

 public function search($query){


         $result=items::where('title','like','%'.$query.'%')->get();
         return $result;


 }


public function updateProfile(Request $request){



    $image1 = $request->file('pic');
$imageName1 =$image1->getClientOriginalName();
$image1->storeAs('public/images', $imageName1);



 User::where('id',Auth::id())->update(array('img'=>$imageName1));

 return back();
}


public function gia(){

  $img=  User::where('id',Auth::id())->get('img')->first();

  return $img;

}



}
