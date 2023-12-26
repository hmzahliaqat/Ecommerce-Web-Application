<?php

namespace App\Http\Controllers;

use App\Models\shops;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class becomeSeller extends Controller
{
    public function getInfo(){
        $user=User::where('id',Auth::id())->first();
        return $user;
    }

    public function store(Request $request){




        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'ph'=>'required',
            'cnic'=>'required',
            'country'=>'required',
            'state'=>'required',
            'accHolderName'=>'required',
            'accNumber'=>'required',
            'bankName'=>'required',
            'address'=>'required',
 ]);

 shops::create([
    'user_id'=>Auth::id(),
    'name'=>$request->input('name'),
    'email'=>$request->input('email'),
    'ph'=>$request->input('ph'),
    'cnic'=>$request->input('cnic'),
    'country'=>$request->input('country'),
    'state'=>$request->input('state'),
    'accHolderName'=>$request->input('accHolderName'),
    'accNumber'=>$request->input('accNumber'),
    'bankName'=>$request->input('bankName'),
    'address'=>$request->input('address'),
]);

User::where('id',Auth::id())->update([
'is_seller'=>1,
]);

return redirect()->to('/seller');

    }


}
