<?php

namespace App\Http\Controllers;

use App\Models\addresses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class address extends Controller
{


    public function store(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name' => 'required',
            'mob' => 'required',
            'flat' => 'required',
            'landmark' => 'required',
            'city' => 'required|',
            'zipcode' => 'required|max:5|min:5',
            'state' => 'required',
            'type' => 'required',
        ]);
        //Create
        addresses::create([
            'name' => $request->input('name'),
            'mob' => $request->input('mob'),
            'flat' => $request->input('flat'),
            'landmark' => $request->input('landmark'),
            'city' => $request->input('city'),
            'zipcode' => $request->input('zipcode'),
            'state' => $request->input('state'),
            'type' => $request->input('type'),
            'user_id' => Auth::id(),

        ]);
    }

public function update(Request $request,$id){
$add=addresses::find($id);
$add->name=$request->input('name');
$add->mob=$request->input('mob');
$add->flat=$request->input('flat');
$add->landmark=$request->input('landmark');
$add->city=$request->input('city');
$add->zipcode=$request->input('zipcode');
$add->state=$request->input('state');
$add->type=$request->input('type');
$add->save();


}
 public function getUpdateItem($id){

    $address=addresses::where('id',$id)->first();
    return $address;
 }

//Get  Address
    public function getAddress()
    {
        $Address = addresses::where('user_id', Auth::id())->get();
        return $Address;
    }
// Home Address Count
public function addCount(){

    $home=addresses::where(['user_id'=>Auth::id()])->get();
    $addCount=$home->count();
    return $addCount;
}
//Delete Address
public function delete($id){

    addresses::where('id',$id)->delete();

}


}
