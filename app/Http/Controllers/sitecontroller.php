<?php

namespace App\Http\Controllers;

use App\about;
use App\home;
use App\product;
use App\service;
use App\testimonial;
use App\who;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index(){
        $home=home::find(1);
        $who=who::all();
        $test=testimonial::all();
        $serv=service::all();
        return view('site.index',['home'=>$home,'who'=>$who,'test'=>$test,'serv'=>$serv]);
    }


    public function our_services(){
        $service= service::all();
        return view('site.services', ['service' =>$service]);
    }

    public function single(){
        $service= service::all();
        return view('site.service', ['service' =>$service]);
    }
    public function hse(){

        return view('site.hse');
    }
    public function career(){

        return view('site.career');
    }
    public function training(){

        return view('site.training');
    }
    public function contact(){

        return view('site.contact');
    }
    public function product(){
        $product=product::all();

        return view('site.product ',['product'=>$product]);
    }
    public function about(){
        $about=about::all();

        return view('site.about ',['about'=>$about]);
    }
}

