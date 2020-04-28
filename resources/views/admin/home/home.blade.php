@extends('layouts.admin_lay')

@section('content')

    <form role="form" action="{{url('/kt_admin/up_home/'.$test->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">



            <div class="form-group">
                <label for="exampleInputPassword1">We Are API </label>
                <textarea type="text" class="form-control"   rows="6" name="we_are" id="exampleInputPassword1" placeholder="Description">{{$test->we_are_api}}</textarea>
                @if ($errors->has('we_are'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('we_are') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> how we are</label>
                <textarea type="text" class="form-control"   rows="6" name="how" id="exampleInputPassword1" placeholder="Description">{{$test->how}}</textarea>
                @if ($errors->has('how'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('how') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> vision</label>
                <textarea type="text" class="form-control"   rows="6" name="vision" id="exampleInputPassword1" placeholder="Description">{{$test->vision}}</textarea>
                @if ($errors->has('vision'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('vision') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> mission</label>
                <textarea type="text" class="form-control"    rows="6" name="mission" id="exampleInputPassword1" placeholder="Description">{{$test->mission}}</textarea>
                @if ($errors->has('mission'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('mission') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> description</label>
                <textarea type="text" class="form-control"    rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$test->des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> footer</label>
                <textarea type="text" class="form-control"    rows="6" name="footer" id="exampleInputPassword1" placeholder="Description">{{$test->footer}}</textarea>
                @if ($errors->has('footer'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('footer') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> video</label>
                <textarea type="text" class="form-control"    rows="6" name="video" id="exampleInputPassword1" placeholder="Description">{{$test->video}}</textarea>
                @if ($errors->has('video'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('video') }}</strong>
                                         </span>
                @endif
            </div>

            @if($test->img!=null)
                <img width="70px" src="{{asset('img/'.$test->img)}}">
            @else
                <p >  Please Uploade Image</p>
            @endif
            <input type="file" class="form-control" name="image" style="margin-top: 5px;">
            @if ($errors->has('image'))
                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
            @endif

            @if($test->logo!=null)
                <img width="70px" src="{{asset('img/'.$test->logo)}}">
            @else
                <p >  Please Uploade Image</p>
            @endif
            <input type="file" class="form-control" name="logo" style="margin-top: 5px;">
            @if ($errors->has('logo'))
                <span class="help-block">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
            @endif


            <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection