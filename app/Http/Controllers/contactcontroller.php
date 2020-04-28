<?php

namespace App\Http\Controllers;

use App\contact;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    function index()
    {
        $con = contact::all();


        return view('admin.contact.contact', compact('con'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'fb' => 'required',
                'tw' => 'required',
                'yt' => 'required',
                'in' => 'required',
                'ph' => 'required',
                'fax' => 'required',
                'address' => 'required',
                'gm' => 'required',


            ]);
        $con = contact::find($id);
        $con->fb = $request->fb;
        $con->tw = $request->tw;
        $con->yt = $request->yt;
        $con->in = $request->in;
        $con->gm = $request->gm;
        $con->ph = $request->ph;
        $con->address = $request->address;
        $con->fax = $request->fax;




        if($con->save()){

            return back();
        }
    }




}
