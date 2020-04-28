<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index(){
        $test=client::all();
        return view('admin.client.client',['test'=>$test]);
    }

    function add(Request $request){

        $this->validate($request,
            [




                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new client();


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [



                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=client::find($id);




        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }


        if($test->save()){
            return back();
        }

    }
    function delete($id){
        $test=client::find($id);
        $test->delete();
        return back();

    }
}
