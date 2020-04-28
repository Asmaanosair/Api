
@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Contact  Table</h3>

                    <div class="box-tools">

                    </div>
                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($con as $row)
                        <form method="post" action="{{url('/kt_admin/up_contact/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>
                                    <input type="text" name="address" required="required" class="form-control" value="<?php echo $row->address; ?>">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="fax" required="required" class="form-control" value="<?php echo $row->fax; ?>">
                                    @if ($errors->has('fax'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fax') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="ph" required="required" class="form-control" value="<?php echo $row->ph; ?>">
                                    @if ($errors->has('ph'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="fb" required="required" class="form-control" value="<?php echo $row->fb; ?>">
                                    @if ($errors->has('fb'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                    @endif


                                    <input type="text" name="tw" required="required" class="form-control" value="<?php echo $row->tw; ?>">
                                    @if ($errors->has('tw'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="in" required="required" class="form-control" value="<?php echo $row->in; ?>">
                                    @if ($errors->has('in'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('in') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="yt" required="required" class="form-control" value="<?php echo $row->yt; ?>">
                                    @if ($errors->has('yt'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yt') }}</strong>
                                        </span>
                                    @endif



                                    <input type="text" name="gm" required="required" class="form-control" value="<?php echo $row->gm; ?>">
                                    @if ($errors->has('gm'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gm') }}</strong>
                                        </span>
                                    @endif






                                    <button type="submit" class="btn btn-success form-control btn-md">Save Changes </button>

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
