<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class MainpageControll extends Controller
{
    //
    function index()
    { 
        //return DB::select("select * from products");
        //return Product::all();
        $data= Product::all();
        return view('adminpage',['products'=>$data]);
    
    }
}
