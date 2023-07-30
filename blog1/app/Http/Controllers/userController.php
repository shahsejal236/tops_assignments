<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Hash;
use session;
use alert;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        return view('frontend.login');
    }

    public function loginauth(Request $request)
    {
        $email=$request->email;
        $data=user::where('email','=',$email)->first();
        if($data)
        {
            if(Hash::check($request->password,$data->password))
            {
                session()->put('userid',$data->id);
					session()->put('email',$data->email);
					session()->put('fname',$data->fname);
					return redirect('/index');
            }
            else{
                return redirect('/login')->with('failed','Pasword Not Valid');
            }
        }
        else{
            return redirect('/login')->with('failed','Username Not Valid');
        }
    }

    public function logout()
    {
		// destroy session
		session()->pull('userid');
		session()->pull('email');
		session()->pull('fname');
		return redirect('/index');

        Alert::success('You Have Successfully Logout...!');
        return redirect('/index');
            
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
   
    public function signup()
    {
		
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

        $data = new user;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $file=$request->file('file');

        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/customer/',$filename); 
        
        $data->file=$filename;
        $data->save();
        return redirect('/login')->with('success','Register Succeess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $id)
    {
        $data=user::find($id)->first();
		return view('frontend.profile',['data'=>$data]);
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
