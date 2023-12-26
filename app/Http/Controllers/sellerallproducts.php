<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

class sellerallproducts extends Controller
{



    public function update($id,Request $request){



        if($request->hasFile('image')){
            $image1 = $request->file('image');
            $imageName1 = $image1->getClientOriginalName();
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




        $pd=items::find($id);
        $pd->title=$request->input('title');
        $pd->brand=$request->input('brand');
        $pd->dCharges=$request->input('dCharges');
        $pd->price=$request->input('price');
        $pd->category=$request->input('category');
        $pd->discription=$request->input('discription');

        if($request->hasFile('image')){
        $pd->image=$imageName1;
        }

    if($request->hasFile('image2')){

        $pd->image2=$imageName2;
        }

    if($request->hasFile('image3')){

        $pd->image3=$imageName3;
    }

    if($request->hasFile('image4')){

        $pd->image4=$imageName4;

        }
        if($request->hasFile('image5')){

        $pd->image5=$imageName5;

        }
        $pd->save();



    }

    public function getItem($id){
        $item=items::find($id);
        return $item;
    }
    public function edit($id){

        return view('pages.editProduct',[
            'product'=>$id,
        ]);
    }


    public function delete($id){

        $item=items::find($id);
        $item->delete();


    }




}
