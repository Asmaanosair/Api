<?php

namespace App\Http\Controllers;

use App\who;
use Illuminate\Http\Request;

class howcontroller extends Controller
{
    public function index($id){
        $test=who::find($id);
        return view('admin.how.how',['test'=>$test]);
    }

    function update(Request $request,$id){

        $this->validate($request,
            [

                'des'=>'required',
                'title'=>'required',

                'image'=>'mimes:jpeg,bmp,png',




            ]);
        $test=who::find($id);
        $test->des=$request->des;

        $test->title=$request->title;




        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }




        if($test->save()){

            return back();
        }

    }
}
