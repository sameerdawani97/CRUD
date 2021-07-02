<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\usr;

class usrcontroller extends Controller
{
    //
    function index(){
        //echo "db connection will be here";    }
        return DB::select('select * from users');
        
    }

}
