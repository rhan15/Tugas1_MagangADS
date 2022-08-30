<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    public function about(){
        return view('about');
    }

    public function gallery(){
        return view('gallery');
    }
    public function dataProduct(){
        $data = Product::get();

        // if (request()->ajax()) {
        //     return DataTables::of($data)->addIndexColumn()->addColumn('email', function($item) {
        //             return $item->user->email;
        //         })  
        //         ->make(true);
        // }

        // return view('datatable');

        if (request()->ajax()) {
            return DataTables::of($data)->addIndexColumn()->addColumn('store_name', function($item) {
                return $item->store->store_name;
            })
            ->make(true);
        }
        return view('datatable');
        
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
