<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class redirectToSellerDb extends Controller
{
    //

    public function redirectToSeller(){
    Cache::put('seller','null');
    return redirect()->to('/');


    }


    public function redirectBack(){

        Cache::delete('seller');

return redirect()->to('/');
    }
}
