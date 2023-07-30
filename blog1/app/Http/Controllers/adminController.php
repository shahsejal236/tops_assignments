<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Hash;
use session;
use Alert;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin()
    {
        //
        return view('backend.login');
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

    public function adminlogincheck(Request $request)
    {
        $email=$request->email;

        $data=admin::where('email','=',$email)->first();
        if($data){

            if(Hash::check($request->password,$data->password))
            {
                //session create
                session()->put('aid',$data->id);
                session()->put('anm',$data->name);
                return redirect('/dashboard');

                Alert::success('Congrats', 'You\'ve Successfully Logged in');
				return redirect('/index');
            }
            else{
                return redirect('/adminlogin')->with('Failed','password Not Valid');
            }
        }
        else{
            return redirect('/adminlogin')->with('failed','Username Not Valid');
        }
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
