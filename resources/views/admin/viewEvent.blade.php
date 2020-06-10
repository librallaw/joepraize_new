@extends('layouts.master')
@section('title')
    Event
@stop

@section('header_title')View Events @stop
@section('content')
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxdd">

                        <div class="row">
                            @foreach($details as $detail)


                                <div class="col-md-4">
                                    <div class="gal-detail thumb" >
                                        <a >
                                            <img src="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" class="img-responsive" style="min-height: 250px;max-height: 250px;overflow: hidden"/>
                                        </a>
                                        <h4>{{$detail -> title}}</h4>

                                        <p class="text-danger"><strong>{{$detail->attendees->count()}} Attendees</strong> <p/>

                                        <p class="form-group">

                                            <div type="text" class="form-control">{{date('D, M jS, Y',$detail -> event_time)}}</div>
                                        </p>



                                        <p class="text-muted">
                                            <a href="{{"/admin/edit/event/{$detail->unique_id}"}}"><button class="btn btn-info">Edit</button></a>  <a href="{{"/admin/view/attendance/$detail->unique_id"}}"><button class="btn btn-warning">View Attendance</button></a>


                                        </p>
                                    </div>
                                </div><!-- end col -->
                            @endforeach


                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@stop
<!-- END wrapper -->
