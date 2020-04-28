@extends('layouts.admin_lay')

@section('content')
    <a href="{{url('/kt_admin/serve')}}" class="btn btn-warning pull-right"> Show All  </a>
    <form role="form" action="{{url('/kt_admin/up_serve/'.$product->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> name   </label>
                <input type="text" class="form-control" name="head" id="exampleInputPassword1"  value="{{$product->title}}"  placeholder="العنوان الرئيسي ">
                @if ($errors->has('head'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Simple Description</label>
                <textarea type="text" class="form-control"   name="s_des" id="exampleInputPassword1" placeholder="Description"> {{$product->s_des}}</textarea>
                @if ($errors->has('s_des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea type="text" class="form-control"  id="editor3"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$product->des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>



            @if($product->img!=null)
                <img width="70px" src="{{asset('img/'.$product->img)}}">
            @else
                <p >  Please Uploade Image</p>
            @endif
            <input type="file" class="form-control" name="image" style="margin-top: 5px;">
            @if ($errors->has('image'))
                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
            @endif



            @if($product->attach!=null)
                <img width="70px" src="{{asset('img/'.$product->attach)}}">
            @else
                <p >  Please Uploade Image</p>
            @endif
            <input type="file" class="form-control" name="image2" style="margin-top: 5px;">
            @if ($errors->has('image2'))
                <span class="help-block">
                                            <strong>{{ $errors->first('image2') }}</strong>
                                        </span>
            @endif

            <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection