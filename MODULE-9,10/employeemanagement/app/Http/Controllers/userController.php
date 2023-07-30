<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Mail\welcome;

use Hash;
use Session;
use Alert;
use Mail;

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
          	
        $data = DB::table('employee')->paginate(10);
         //$data= DB::table('employee')->get();   
         return view('backend.manage_user',['data'=>$data]); // user::all()  
       
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

     public function store(Request $request) {
     


        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender'=> 'required',
            'phone_no'=> 'required|max:11',
            'age' => 'required',
            'address' => 'required',
            'email' => 'required|unique:employee',
            'password' => 'required|min:3|max:12',
        ]);
		
   
        DB::table('employee')->insert([
            $fname = $request->fname,
            //'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'phone_no' => $request->phone_no,
            'age' => $request->age,
            'address' => $request->address,
            $email = $request->email,
           // 'email' => $request->email,
            'password' => Hash::make($request->password),
           // 'file' => $request->file,

    
           $data=array("fname"=>$fname,"email"=>$email),
           Mail::to($email)->send(new welcome($data)),
        ]);
        
       
        Alert::success('Congrats...!', 'You have successfully Registered ');
        return redirect('/login');
    }
  


    public function userlogin()
    {

        return view('frontend.login');
    }

    public function login_check(Request $request)

    {
        
       $email=$request->email;
       $password=$request->password;
       

       $data = DB::table('employee')->get()->where('email','=',$email)->first();

       if($data){
            if(Hash::check($password,$data->password)){

                //create session

                session()->put('userid',$data->id);
				session()->put('fname',$data->fname);
				session()->put('email',$data->email);

                Alert::success('Congrats! Logged in successfully...');
                return redirect('/userindex');
            }
            else{
                Alert::error('Ops! Login Failed','Wrong Password...');
                return redirect()->back();
            }
       }
       else{
            Alert::error('Ops! Login Failed','Wrong Username...');
            return redirect()->back();
       }
    }
    public function logout()
    {
		// destroy session
		session()->pull('userid');
		session()->pull('email');
		session()->pull('fname');
		return redirect('/userindex');

        Alert::success('You Have Successfully Logout...!S');
        return redirect('/userindex');
            
	}	

    public function profile()
    {

     //get user data with loginid 
        $data=DB::table('employee')->where('employee.id','=',session('userid'))
		->first();
		return view('frontend.profile',['data'=>$data]);
    }
        //$data= DB::table('employee')->get()->where('id','=',$id)->first();
		
		//return view('frontend.profile',['data'=>$data]);
    



  
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

		$data=DB::table('employee')->find($id);
        return view('frontend.editprofile',['data'=>$data]);
        
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
        
        $data=DB::table('employee')->where('id',$id)->update([

            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'phone_no' => $request->phone_no,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email
        ]);
        
        Alert::success('Congrats...!', 'Your Profile has been successfully updated... ');
        return redirect('/profile');

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
        
      
        $data=DB::table('employee')->where('id', $id)->delete();
        Alert::success('Data Deleted Successfully');
        return redirect('manage_user')->with('success','Delete Succeess');

        
		


    }
   
}
