<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class membercontroller extends Controller
{
     function show(){
        $users = Member::all();

        //$users = Usr::paginate(1);
       
        return view('list',compact('users'));
    }

    //
    function savedata(Request $req){
        $req->validate([
            'Username'=>'required | max:12' ,
            'Email'=>'required | email' ,
            'Address'=>'required | max:20'
        ]);
        
        $member = new Member;
        $member->name = $req->Username;
        $member->email = $req->Email;
        $member->address = $req->Address;
        $member->save();
        return redirect('addmember');

    }

    function getData(Request $req){
        $req->validate([
            'Username'=>'required | max:12'
        ]);

       $info =  Member::select('name', 'email', 'address')->where('name','=',$req->Username)->get();
       // select('select name, email, address from members where name=$req->Username');
       return view('membersdata',['datas'=>$info]);
    }

    function delete($id){
        $info = Member::find($id);
        $info->delete();
        return redirect('list');
    }

    function updatepage($id){
        $data = Member::find($id);
        return view('update',['data'=>$data]);
    }

    function updateM(Request $req){
        $req->validate([
            'Username'=>'required | max:12' ,
            'Email'=>'required | email' ,
            'Address'=>'required | max:20'
        ]);
        
        $data_update = Member::find($req->id);
        $data_update->name = $req->Username;
        $data_update->address = $req->Address;
        $data_update->email = $req->Email;
        $data_update->save();
        return redirect('list');       
        
    }
}
