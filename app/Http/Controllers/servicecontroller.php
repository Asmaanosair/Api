<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class servicecontroller extends Controller
{
    public function index()
    {
        $test = service::all();
        return view('admin.service.serv', ['test' => $test]);

    }

    public function create()
    {
        $category=service::all();
        return view('admin.service.c_serve',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=service::find($id);

        return view('admin.service.e_serve',['product'=>$product]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',


                's_des' => 'required',
                'image2' => 'required',
                'image' => 'required',



            ]);
        $test = new service();

        $test->title = $request->head;

        $test->des= $request->des;
        $test->s_des= $request->s_des;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }


        if($request->file('image2') !=null)
        {
            $filname2=time().".".$request->file('image2')->getClientOriginalExtension();
            $request->file('image2')->move('img',$filname2);
            $test->attach=$filname2;
        }

        if ($test->save()) {


            return redirect("kt_admin/serve");
        }else{
            return back();
        }
    }


    function update(Request $request ,$id)
    {
        $this->validate($request,
            [
                'head' => 'required',
                's_des' => 'required',

            ]);
        $test = service::find($id) ;
        $test->title = $request->head;
        $test->s_des= $request->s_des;


        $test->des= $request->des;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
        if($request->file('image2') !=null)
        {
            $filname2=time().".".$request->file('image2')->getClientOriginalExtension();
            $request->file('image2')->move('img',$filname2);
            $test->attach=$filname2;
        }

        if ($test->save()) {



            return redirect("/kt_admin/serve");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=service::find($id);
        $slider->delete();
        return back();

    }
}
