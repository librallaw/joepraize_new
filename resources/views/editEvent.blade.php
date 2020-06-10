@extends('layouts.master')
@section('title')
    Edit Event
@stop

@section('header_title')Edit Event @stop
@section('content')
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to("/admin/edit/event/{$details->unique_id}")}}" enctype="multipart/form-data">
                                        <div class="profile-info-namess">

                                            <div class="col-md-4">
                                                <img src="@if(!empty($details->banner)){{"/".$details->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" class="img-responsive " alt="profile-image" />

                                                <input type="file" name="image" class="form-control"  />
                                            </div>



                                            <div class="profile-info-detail col-md-8">

                                                <div class="form-group col-md-12">
                                                    <label>Title</label>
                                                    <input type="text" value="{{$details->title}}" name="title" class="form-control"  />
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Date</label>

                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="time" value="{{date('m/j/Y',$details->event_time)}}" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                    </div><!-- input-group -->
                                                </div>


                                                <div class="col-md-12 form-group">
                                                    <label>Would people register for this event</label>
                                                    <select name="form" class="form-control">


                                                        <option value="">Please Choose ..</option>
                                                        <option @if($details->form == 1)selected @endif value="1">Yes</option>
                                                        <option @if($details->form == 0)selected @endif value="0">No</option>
                                                    </select>
                                                </div>


                                                @if($details->state == 1)
                                                <div class="col-md-12 form-group" style="background-color: green; padding: 10px;color:white">
                                                    <label>Turn Registration On or Off</label>

                                                    <select name="state" class="form-control">


                                                        <option value="">Please Choose ..</option>
                                                        @if($details->state == 1) <option  value="0">Turn Off</option> @endif

                                                       {{-- @if($details->state == 0) <option  value="1">Turn On</option> @endif--}}
                                                    </select>
                                                </div>
                                                @elseif($details->state == 0)

                                                    <div class="col-md-12 form-group" style="background-color: red; padding: 10px;color:white">
                                                        <label>Registration closed </label>
                                                        @endif
                                                        </div>





                                                <div class="form-group col-md-12">
                                                    <label>Adress of Event</label>
                                                    <textarea type="text" name="address" class="form-control" >{{$details->address}}</textarea>
                                                    <input type="hidden" name="banner" value="{{$details->banner}}"/>
                                                </div>


                                                <div class="col-md-12 form-group" style="background-color: red; padding: 10px;color:white">
                                                    <label>Turn Event On or Off</label>
                                                    <select name="status" class="form-control">


                                                        <option value="">Please Choose ..</option>
                                                        @if($details->status == 1) <option  value="0">Turn Off</option> @endif

                                                        @if($details->status == 0) <option  value="1">Turn On</option> @endif
                                                    </select>
                                                </div>

                                                <div class="button-list m-t-20 col-md-6">
                                                    <button type="submit" class="btn btn-info">  Update Event </button>

                                                </div>


                                            </div>


                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div><!-- end row -->


                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@stop
<!-- END wrapper -->
