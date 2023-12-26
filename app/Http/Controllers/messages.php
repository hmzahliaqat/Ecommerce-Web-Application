<?php

namespace App\Http\Controllers;

use App\Events\chatEvent;
use App\Models\messages as ModelsMessages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messages extends Controller
{



    public function getIns($id){


        $secondP=User::find($id);
        return $secondP;
    }

public function startChat(Request $request,$id){



    $thread_value = Auth::id() . '-' .$id;

    $messageReciver=User::find($id);


return view('pages.chat.chat',[
    'reciever'=>$messageReciver,

]);


}

public function sendChat(Request $request,$id){
    $thread_value = Auth::id() . '-' .$id;

    $user=User::find(Auth::id());

   $message= ModelsMessages::create([
        'thread' => $thread_value,
        'message' => $request->input('message'),
        'receiver_id' => $id,
        'sender_id' => Auth::id(),
    ]);

    User::where('id',Auth::id())->update(array('last_msg' => $request->input('message')));

broadcast(new chatEvent($message));

}

public function getChat($id){

    // get all chats
    $messages = ModelsMessages::where('thread', Auth::id().'-'.$id)->orWhere('thread', $id.'-'.Auth::id())->get();

return $messages;
}

public function getUsers(){

    $Users = User::where('id','!=',Auth::id())->get();


    return $Users;

}

public function getAuthUser(){
    $authUser=Auth::user();

    return $authUser;
}


}
