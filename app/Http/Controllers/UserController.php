<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = [
        //     [
        //         'name'      => 'John Doe',
        //         'email'     => 'john@mail.com',
        //         'twitter'   => 'johndoe'
        //     ],
        //     [
        //         'name'      => 'Tailor Otwell',
        //         'email'     => 'tailor@mail.com',
        //         'twitter'   => 'tailorott'
        //     ],
        //     [
        //         'name'      => 'Steve Schoger',
        //         'email'     => 'steve@mail.com',
        //         'twitter'   => 'steveschoger',
        //     ],
        // ];
    
        return view('users.index', [
            'users' => User::get(),
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
            'email' => 'required|email|unique:users',
            'city' => 'required'
        ];

        $this->validate($request, $rules);
        $users = User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'city'  =>  $request->city
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
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
        User::find($id)->update([
            'name'  => $request->name,
            'email' => $request->email,
            'city'  => $request->city,
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
        $user = User::find($id);
        $user->delete();   
    }
}
