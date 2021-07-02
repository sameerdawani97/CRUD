<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function userlogin(Request $req)
    {
        $data = $req->input('User'); 
        $req->session()->put('User', $data);
        // echo session('User');
        return redirect('profile');
    }
}
