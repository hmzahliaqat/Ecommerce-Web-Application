<?php

namespace App\Http\Controllers;

use App\Events\commentEvent;
use App\Events\replyEvent;
use App\Models\commentImages;
use App\Models\comments as ModelsComments;
use App\Models\replies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class comments extends Controller
{
    public function sendComment($id,Request $request){



        $request->validate([

            'body'=>'required',
        ]);
$user=User::find(Auth::id());

      $comment=ModelsComments::create([
            'product_id'=>$id,
            'user_id'=>Auth::id(),
            'body'=>$request->input('body'),
            'user_name'=>$user->name,

        ]);

        if($request->hasFile('image1')){
            $image1 = $request->file('image1');
            $imageName1 = $request->input('body').'-'.$image1->getClientOriginalName();
            $image1->storeAs('public/images/comments', $imageName1);


            }

            if($request->hasFile('image2')){
            $image2 = $request->file('image2');
            $imageName2 = $request->input('body').'-'.$image2->getClientOriginalName();
            $image2->storeAs('public/images/comments', $imageName2);
            }
            if($request->hasFile('image3')){
            $image3 = $request->file('image3');
            $imageName3 = $request->input('body').'-'.$image3->getClientOriginalName();
            $image3->storeAs('public/images/comments', $imageName3);
            }
            if($request->hasFile('image4')){
            $image4 = $request->file('image4');
            $imageName4 = $request->input('body').'-'.$image4->getClientOriginalName();
            $image4->storeAs('public/images/comments', $imageName4);
            }
            if($request->hasFile('image5')){
            $image5 = $request->file('image5');
            $imageName5 = $request->input('body').'-'.$image5->getClientOriginalName();
            $image5->storeAs('public/images/comments', $imageName5);
            }

            // commentImages::create([
            //     'comment_id'=>$comment->id,
            //     'image1'=>$imageName1,
            //     'image2'=>$imageName2,
            //     'image3'=>$imageName3,
            //     'image4'=>$imageName4,
            //     'image5'=>$imageName5,
            //     'user_id'=>Auth::id(),

            // ]);


        broadcast(new commentEvent($comment,$user))->toOthers();
    }



public function getComment($id){

    $comments=ModelsComments::where('product_id',$id)->Join('users','comments.user_id','=','users.id')->

    orderBy('comments.id','desc')->get(['users.name','comments.id','comments.body','comments.created_at','comments.user_id']);
    return $comments;
}


public function createReply($id,Request $request){

    $user=User::find(Auth::id());
$reply=replies::create([
    'comment_id'=>$id,
    'body'=>$request->input('body'),
    'user_id'=>Auth::id(),
    'user_name'=>$user->name,

]);
broadcast(new replyEvent($reply,$user));

}

public function getReply(){
    $replies=replies::all();
    return $replies;
}


}
