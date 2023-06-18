<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

use Hash;
use Session;
use Alert;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_user()
    {
        //
         $data=user::paginate();  	
         return view('backend.manage_user',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        //
        return view('frontend.signup');
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
        $data=new user;
        $fname=$data->fname=$request->fname;
        $lname=$data->lname=$request->lname;
        $data->gender=$request->gender;
        $data->phoneno=$request->phoneno;
        $data->age=$request->age;
        $data->address=$request->address;
        $email= $data->email=$request->email;
        $pass= $data->pass=$request->pass;  
        $data->pass=Hash::make($request->pass);
         
        // image upload
        $file=$request->file('file');		
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/user/',$filename);  // use move for move image in public/images
        $data->file=$filename; // name store in db 
         $data->save();
         Alert::success('Congrats', 'You\'ve Successfully Register!!!');
         
       
         return redirect('login');
     
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
    public function user(user $user)
    {
  
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
    public function destroy(user $user,$id)
    {
        //
        $data=user::find($id)->delete();
        Alert::success('Login Failed', 'Wrong Username');
        return redirect('manage_user')->with('success','Delete Succeess');
		


    }
   
}
