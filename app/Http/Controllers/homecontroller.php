<?php

namespace App\Http\Controllers;

use App\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index($id)
    {
        $test = home::find($id);
        return view('admin.home.home', ['test' => $test]);

    }
        function update(Request $request, $id)
        {

            $this->validate($request,
                [

                    'we_are' => 'required',
                    'how' => 'required',
                    'vision' => 'required',
                    'mission' => 'required',

                    'des' => 'required',
                    'footer' => 'required',
                    'video' => 'required',
                    'image' => 'mimes:jpeg,bmp,png',
                    'logo' => 'mimes:jpeg,bmp,png',


                ]);
            $test = home::find($id);


            $test->head = $request->name;
            $test->title = $request->title;
            $test->des = $request->des;


            if ($request->file('image') != null) {
                $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('img', $filname1);
                $test->img = $filname1;
            }

            if ($request->file('logo') != null) {
                $filname2 = time() . "." . $request->file('logo')->getClientOriginalExtension();
                $request->file('logo')->move('img', $filname1);
                $test->logo = $filname2;
            }


            if ($test->save()) {
                return back();
            }

        }


    }