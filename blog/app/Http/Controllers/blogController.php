<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function alldata()
     {
        $data=blog::all(); 	
        return view('backend.manage_blogs',['data'=>$data]);
 
     
     } 
    
     public function blog()
     {
         return view('frontend.addblog');
     }

     public function blogdata()
     {
        $data=blog::all(); 	
        return view('frontend.blog',['data'=>$data]);
 
 
     
     } 

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
    public function addblog(Request $request)
    {
        //
        $data=new blog;
        $data->title=$request->title;
        $data->content=$request->content;
		
        $data->save();
        return redirect('/blog')->with('success', 'Blog Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
