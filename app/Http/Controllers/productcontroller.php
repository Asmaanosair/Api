<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index()
    {
        $test = product::all();
        return view('admin.product.serv', ['test' => $test]);

    }

    public function create()
    {
        $category=product::all();
        return view('admin.product.c_serve',['category'=>$category]);

    }

    public function edit($id)
    {
        $product=product::find($id);

        return view('admin.product.e_serve',['product'=>$product]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',





            ]);
        $test = new product();

        $test->title = $request->head;

        $test->des= $request->des;





        if ($test->save()) {


            return redirect("kt_admin/product");
        }else{
            return back();
        }
    }


    function update(Request $request ,$id)
    {
        $this->validate($request,
            [
                'head' => 'required',


            ]);
        $test = product::find($id) ;
        $test->title = $request->head;



        $test->des= $request->des;


        if ($test->save()) {



            return redirect("/kt_admin/product");


        }else{

            return back();
        }
    }
    function delete($id){
        $slider=product::find($id);
        $slider->delete();
        return back();

    }
}
