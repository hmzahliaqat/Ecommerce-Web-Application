<?php

namespace App\Http\Controllers;

use App\Models\items;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addProduct extends Controller
{


    public function store(Request $request){



        $request->validate([
            'title'=>'required ',
            'brand'=>'required',
            'price'=>'required|integer',
            'dCharges'=>'required|integer',
            'image'=>'mimes:png,jpg|required',
            'category'=>'required',
            'discription'=>'required',
        ]);

$slug=rand(1,10000);

if($request->hasFile('image')){
$image1 = $request->file('image');
$imageName1 = $request->input('title').'-'.$image1->getClientOriginalName();
$image1->storeAs('public/images', $imageName1);
}

if($request->hasFile('image2')){
$image2 = $request->file('image2');
$imageName2 = $request->input('title').'-'.$image2->getClientOriginalName();
$image2->storeAs('public/images', $imageName2);
}
if($request->hasFile('image3')){
$image3 = $request->file('image3');
$imageName3 = $request->input('title').'-'.$image3->getClientOriginalName();
$image3->storeAs('public/images', $imageName3);
}
if($request->hasFile('image4')){
$image4 = $request->file('image4');
$imageName4 = $request->input('title').'-'.$image4->getClientOriginalName();
$image4->storeAs('public/images', $imageName4);
}
if($request->hasFile('image5')){
$image5 = $request->file('image5');
$imageName5 = $request->input('title').'-'.$image5->getClientOriginalName();
$image5->storeAs('public/images', $imageName5);
}

items::create([
'title'=>$request->input('title'),
'slug'=>$request->input('title').'-'.$slug,
'brand'=>$request->input('brand'),
'price'=>$request->input('price'),
'dCharges'=>$request->input('dCharges'),
'created_by'=>Auth::id(),
'discription'=>$request->input('discription'),
'category'=>$request->input('category'),
'image'=>$imageName1,
'image2'=>$imageName2,
'image3'=>$imageName3,
'image4'=>$imageName4,
'image5'=>$imageName5,
]);


    }
}
