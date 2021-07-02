<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function show($id)
    {
        //return "hello controller";
        return $id;
    }    //

    function viewload($name)
    {
        return view("hello",['name'=>$name]);
    }

    function getData(Request $req)
    {
        
        $req->validate([
            'Username'=>'required | max:10' ,
            'Password'=>'required |min:3'
        ]);
        return $req->input();
    }
}
