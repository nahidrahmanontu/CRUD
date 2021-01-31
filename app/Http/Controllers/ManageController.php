<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Product::all();
        return view('/',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $product= new Product;
        $product->title=$req->input('title');
        $product->subtitle=$req->input('subtitle');
        //$product->gallery=$req->input('gallery');
        if ($req->hasfile('gallery')){
            $file = $req->file('gallery');
            $extension=$file->getClientOriginalExtension();
            $filename=time() .'.' .$extension;
            $file->move('uploads/products/', $filename);
            $product->gallery = $filename;
        }
        else{
            return $req;
            $products->gallery = '';
        }
        
        $product->save();
        return redirect('addproduct');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Product::find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data= Product::find($req->id);
        $data->title=$req->title;
        $data->subtitle=$req->subtitle;
        $data->gallery=$req->gallery;
        $data->save();
        return redirect('console');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Product::find($id);
        $data->delete();
        return redirect('admin');
    }
}
