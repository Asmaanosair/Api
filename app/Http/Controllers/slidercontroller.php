<?php

namespace App\Http\Controllers;

use App\slider;
use App\testimonial;
use Illuminate\Http\Request;

class slidercontroller extends Controller
{

    function update(Request $request,$id){

    $this->validate($request,
        [

            'name'=>'required',
            'title'=>'required',
            'des'=>'required',
            'image'=>'mimes:jpeg,bmp,png',
            'about'=>'mimes:jpeg,bmp,png',
            'contact'=>'mimes:jpeg,bmp,png',
            'service'=>'mimes:jpeg,bmp,png',
            'career'=>'mimes:jpeg,bmp,png',
            'product'=>'mimes:jpeg,bmp,png',
            'hse'=>'mimes:jpeg,bmp,png',


        ]);
    $test=slider::find($id);
    $test->head=$request->name;
    $test->title=$request->title;
    $test->des=$request->des;


    if($request->file('image') !=null)
    {
        $filname1=time().".".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('img',$filname1);
        $test->image=$filname1;
    }


        if($request->file('about') !=null)
        {
            $about1=time().".".$request->file('about')->getClientOriginalExtension();
            $request->file('about')->move('img',$about1);
            $test->about=$about1;
        }


        if($request->file('career') !=null)
        {
            $career=time().".".$request->file('career')->getClientOriginalExtension();
            $request->file('career')->move('img',$career);
            $test->career=$career;
        }


        if($request->file('hse') !=null)
        {
            $hse=time().".".$request->file('hse')->getClientOriginalExtension();
            $request->file('hse')->move('img',$hse);
            $test->hse=$hse;
        }

        if($request->file('product') !=null)
        {
            $product=time().".".$request->file('product')->getClientOriginalExtension();
            $request->file('product')->move('img',$product);
            $test->product=$product;
        }

        if($request->file('service') !=null)
        {
            $service=time().".".$request->file('service')->getClientOriginalExtension();
            $request->file('service')->move('img',$service);
            $test->service=$service;
        }


        if($request->file('contact') !=null)
        {
            $contact=time().".".$request->file('contact')->getClientOriginalExtension();
            $request->file('contact')->move('img',$contact);
            $test->contact=$contact;
        }

    if($test->save()){
        return back();
    }

}
}
