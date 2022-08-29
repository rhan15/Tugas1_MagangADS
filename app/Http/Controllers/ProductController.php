<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'store_id' => 'required',
        ];

        $this->validate($request, $rules);
        $products = Product::create([
            'name'  =>  $request->name,
            'slug' =>  $request->slug,
            'price'  =>  $request->price,
            'description'  =>  $request->description,
            'photo'  =>  $request->photo,
            'store_id'  =>  $request->store_id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::find($id)->update([
            'name'  =>  $request->name,
            'slug' =>  $request->slug,
            'price'  =>  $request->price,
            'description'  =>  $request->description,
            'photo'  =>  $request->photo,
            'store_id'  =>  $request->store_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Product::find($id);
        $user->delete();
    }
}
