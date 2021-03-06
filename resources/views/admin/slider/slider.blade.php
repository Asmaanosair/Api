حاح@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Slider Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New Image
                    </button>

                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New Image </h4>
                                </div>
                                <form role="form" action="{{url('/kt_admin/add_slider')}}" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Title</label>
                                            <input type="text" class="form-control"  name="name" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1" dir="rtl"> Header   </label>
                                            <input type="text" class="form-control" name="head" id="exampleInputPassword1"  placeholder="header">
                                            @if ($errors->has('head'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                                            @endif
                                        </div>









                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > Image </label>
                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline">Save changes</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>

                        <th style="width: 20%">  Title </th>

                        <th style="width: 20%">  Header </th>

                        <th style="width: 18%">image</th>
                        <th style="width: 18%">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider as $row)
                        <form method="post" action="{{url('/kt_admin/up_slider/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>
                                    <input type="text" name="name" required="required" class="form-control" value="<?php echo $row->title; ?>">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="head" required="required" class="form-control" value="<?php echo $row->head; ?>">
                                    @if ($errors->has('head'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                        </span>
                                    @endif
                                </td>




                                <td>
                                    @if($row->img!=null)
                                        <img width="70px" src="{{asset('img/'.$row->img)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </td>


                                <td>
                                    @if($row->about!=null)
                                        <img width="70px" src="{{asset('img/'.$row->about)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="about" style="margin-top: 5px;">
                                    @if ($errors->has('about'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('about') }}</strong>
                                        </span>
                                    @endif
                                </td>



                                <td>
                                    @if($row->hse!=null)
                                        <img width="70px" src="{{asset('img/'.$row->hse)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="hse" style="margin-top: 5px;">
                                    @if ($errors->has('hse'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hse') }}</strong>
                                        </span>
                                    @endif
                                </td>


                                <td>
                                    @if($row->service!=null)
                                        <img width="70px" src="{{asset('img/'.$row->service)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="service" style="margin-top: 5px;">
                                    @if ($errors->has('service'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('service') }}</strong>
                                        </span>
                                    @endif
                                </td>


                                <td>
                                    @if($row->product!=null)
                                        <img width="70px" src="{{asset('img/'.$row->product)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="product" style="margin-top: 5px;">
                                    @if ($errors->has('product'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('product') }}</strong>
                                        </span>
                                    @endif
                                </td>


                                <td>
                                    @if($row->career!=null)
                                        <img width="70px" src="{{asset('img/'.$row->career)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="career" style="margin-top: 5px;">
                                    @if ($errors->has('career'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('career') }}</strong>
                                        </span>
                                    @endif
                                </td>



                                <td>
                                    @if($row->contact!=null)
                                        <img width="70px" src="{{asset('img/'.$row->contact)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="contact" style="margin-top: 5px;">
                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_slider/'.$row->id)}}" class="btn btn-danger"> Delete</a>
                                </td>


                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection