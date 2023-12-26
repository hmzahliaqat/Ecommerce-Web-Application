<?php

namespace App\Http\Controllers;

use App\Models\addresses;
use App\Models\carts;
use App\Models\featureds;
use App\Models\orderdetails;
use App\Models\orderitems;
use App\Models\orders;
use App\Models\payments;
use App\Models\purchased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Str;



class payment extends Controller
{

    public function stripe()
    {
        return view('pages.checkout');
    }


public function checkoutred(Request $request,$address){


    $cartTotalPrice=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->sum(DB::raw('items.price'));

$userAddress=$address;
    return view('pages.test',[
        'price'=>$cartTotalPrice,
        'address'=>$userAddress,
    ]);

}


    public function stripePost(Request $request,$address)
    {

$cart=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->get();


// dd($cart);


        $cartTotalPrice=carts::where('user_id',Auth::id())->join('items','items.id','=','carts.product_id')->sum(DB::raw('items.price'));


        $userAddress=addresses::find($address);


        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));





 $customer = \Stripe\Customer::create(array(

    "address" => [

            "line1" => $userAddress->flat,

            "postal_code" => $userAddress->zipcode,

            "city" => $userAddress->city,

            "state" => $userAddress->city,

            "country" => "PK",

        ],

    "email" => $userAddress->email,

    "name" => $userAddress->name,

    "source" => $request->stripeToken,

 ));

 \Stripe\Charge::create ([

    "amount" => $cartTotalPrice * 100,

    "currency" => "usd",

    "customer" => $customer->id,

    "description" => "Test payment from itsolutionstuff.com.",

    "shipping" => [

      "name" => $userAddress->name,

      "address" => [

        "line1" => $userAddress->flat,

        "postal_code" => $userAddress->zipcode,

        "city" => $userAddress->city,

        "state" => $userAddress->state,

        "country" => "PK",

      ],

    ]

]);


$random=rand(1,100000000);
$orderid='SWM'.$random;

foreach($cart as $crt){

payments::create([

    'order_id'=>$orderid,
    'cardNumber'=>$request->input('cardNumber'),
    'cvc'=>$request->input('cvc'),
    'exp_month'=>$request->input('month'),
    'exp_year'=>$request->input('year'),
    'amount'=>$crt->price + $crt->dCharges,
    'status'=>'paid',
    'type'=>'card',
    'receiver'=>$crt->created_by,
    'product_id'=>$crt->product_id,
]);
}



orders::create([

    'order_id'=>$orderid,
    'billing_name'=>$request->input('nameOnCard'),
    'total'=>$cartTotalPrice,
    'status'=>"paid",
    'method'=>'card',



]);


foreach($cart as $crt ){



    //keeping record of all purchased products

    purchased::create([
        'user_id'=>Auth::id(),
        'product_id'=>$crt->product_id,
    ]);




    $oid=rand(1,10000000);
    orderitems::create([
        'oid'=>$oid,
        'order_id'=>$orderid,
        'product_id'=>$crt->product_id,
        'quantity'=>1,
        'price'=>$crt->price + $crt->dCharges,
        'receiver'=>$crt->created_by,
    'billing_name'=>$request->input('nameOnCard'),

    ]);
}


foreach($cart as $crt){

  $chk=featureds::where('product_id',$crt->product_id)->get();

if($chk->isEmpty()){
    featureds::create([
        'product_id'=>$crt->product_id,
    ]);
}
else{
    featureds::where('product_id',$crt->product_id)->update(['count'=> DB::raw('count + 1')]);
}


orderdetails::create([
    'order_id'=>$orderid,

    'fullname'=>$userAddress->name,
    'phone'=>$userAddress->mob,
    'city'=>$userAddress->city,
    'state'=>$userAddress->state,
    'address1'=>$userAddress->flat,
    'zipcode'=>$userAddress->zipcode,
    'billing_name'=>$request->input('nameOnCard'),
]);

}

carts::getQuery()->delete();

Session::flash('success', 'Payment successful!');



return back();






    }



}
