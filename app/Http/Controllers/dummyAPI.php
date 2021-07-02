<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ['name'=>'sameer','email'=>'sameer@gmail.com','address'=>'karachi'];
    }

    function list($id=null)
    {   
        //dd($id);
        if($id)
            // return Member::find($id);
            return Member::where('name','LIKE','%'.$id.'%')->get();
        else
            return Member::all();
    }
}
