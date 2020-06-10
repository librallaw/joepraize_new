@extends('layouts.master')

@section('title')
    Add Event
@stop


@section('header_title')Add new Event  @stop

@section('content')

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to("/admin/add/event")}}" enctype="multipart/form-data">
                                        <div class="profile-info-namess">

                                            <div class="col-md-4">

                                                <label>Event banner</label>
                                                <input type="file" name="image" class="form-control"  />
                                            </div>



                                            <div class="profile-info-detail col-md-8">

                                                <div class="form-group col-md-12">
                                                    <label>Title</label>
                                                    <input type="text" value="{{Input::old('title')}}" name="title" class="form-control"  />
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Date</label>

                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="time" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                    </div><!-- input-group -->
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Adress of Event</label>
                                                    <textarea type="text" name="address" class="form-control" >{{Input::old('address')}}</textarea>
                                                </div>

                                                <div class="button-list m-t-20 col-md-6">
                                                    <button type="submit" class="btn btn-info">  Add </button>

                                                </div>


                                            </div>


                                            <div class="clearfix"></div>
                                        </div>
                                </div>
                            </div>



                        </div><!-- end row -->

                        </form>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@stop
<!-- END wrapper -->
