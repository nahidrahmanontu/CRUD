<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainpageControll;
use App\Http\Controllers\ManageController;

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



//Pages
/*
Route::get('/console', function () {
    return view('login');
});
*/







Route::group(['middleware'=>['protectedPage']],function(){
    Route::get("admin",[MainpageControll::class,'index']);
    Route::view('addproduct','addproduct');
    Route::view('edit','edit');
    Route::post("addproduct",[ManageController::class, 'create']);
    Route::get("delete/{id}",[ManageController::class, 'destroy']);
    Route::get("edit/{id}",[ManageController::class, 'show']);
    Route::post("edit",[ManageController::class, 'update']);
});
//



Route::post("/console",[UserController::class,'login']);
//Route::get("admin",[MainpageControll::class,'index']);
Route::get("/",[ManageController::class,'index']);




//LOG IN

Route::get('/console', function () {
    if(session()->has('user'))
    {
        return redirect('admin');
    }
    return view('login');
});


Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('console');
});
//