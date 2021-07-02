<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\usercontroller;
// use App\Http\Controllers\userAuth;
// use App\Http\Controllers\usrcontroller;
// use App\Http\Controllers\listcontroller;
use App\Http\Controllers\membercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return redirect("about");
    return view('welcome');
}); 
// Route::get("user",[usercontroller::class,'show']);
// Route::get("user/{id}",[usercontroller::class,'show']);
// Route::get("user/{name}",[usercontroller::class,'viewload']);
// // Route::get('/about', function () {
// //     return view('about');
// // });

// Route::view("users","users");

// Route::get('/users/{name}', function ($name) {
//     // return redirect("about");
//     return view('hello',['name'=>$name]);
// });

// Route::view('about','about');

// Route::post("sub",[usercontroller::class,'getData']);
// Route::view('form','form');
// Route::view('hi','hi')->middleware('protectedPage');
// Route::view('noaccess','noaccess') ;
// Route::view('hey','hey');
// // Route::group(['middleware'=>['protectPage']],function(){
// //     Route::view('hey','hey');
// // });
// //Route::view('login','login');
// Route::view('profile','profile');
// Route::get("logout",function(){
//     if(session()->has('User'))
//     {
//         session()->pull('User', null);
//     }
//     return redirect('login');
// });

// Route::get("login",function(){
//     if(session()->has('User'))
//     {
//        return redirect("profile");
//     }
//     return view('login');
// });

//Route::post("log", [userAuth::class, 'userlogin']);

//Route::view("h",'/hi');

//Route::get('usr',[usrcontroller::class,'index']);

Route::get('list',[membercontroller::class,'show']);

Route::get('addmember',function(){
     return view('addmember');
});
Route::post('add',[membercontroller::class,'savedata']);
//Route::view('fetchmember','fetch');
Route::post('fetch',[membercontroller::class, 'getData']);
Route::get('delete/{id}',[membercontroller::class, 'delete']);
Route::get('update/{id}',[membercontroller::class, 'updatepage']);
Route::post('updateM',[membercontroller::class, 'updateM']);
//Route::view('membersdata','membersdata');