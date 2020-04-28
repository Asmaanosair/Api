<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
    public function index(){
        $test=about::all();
        return view('admin.about.about',['test'=>$test]);
    }

    function add(Request $request){

        $this->validate($request,
            [

                'title'=>'required',
                'des'=>'required',

            ]);
        $test=new about();




        $test->title=$request->title;
        $test->des=$request->des;




        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [


                'title'=>'required',
                'des'=>'required',





            ]);
        $test=about::find($id);

        $test->title=$request->title;
        $test->des=$request->des;

        if($test->save()){
            return back();
        }

    }
    function delete($id){
        $test=about::find($id);
        $test->delete();
        return back();

    }
}
