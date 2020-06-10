@extends('layouts.master')

@section('title')
    Edit Core values
@stop


@section('header_title')Edit Core Values  @stop

@section('content')

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to('/admin/edit/core_values')}}">
                                        <div class="profile-info-namess">





                                            <div class="profile-info-detail col-md-12">
                                                <h3 class="m-t-0 m-b-0">Edit Core Values </h3><br />





                                                <div class="form-group col-md-12">
                                                    <label>Passion</label>
                                                    <input type="text" class="form-control" name="passion" value="{{$details->title}}"/>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Passion Text</label>
                                                    <textarea class="form-control" name="passion_text" style="width:100%;height: 200px;resize: none;color:black;">{{$details->com2}}</textarea>
                                                </div>
                                                <p><div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-info">  Update </button>

                                                </div></p>



                                                <hr />


                                                <div class="form-group col-md-12">
                                                    <label>Mission</label>
                                                    <input type="text" class="form-control" name="mission" value="{{$details->com3}}"/>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Mission Text</label>
                                                    <textarea class="form-control" name="mission_text" style="width:100%;height: 200px;resize: none;color:black;">{{$details->com4}}</textarea>
                                                </div>
                                               <p><div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-info">  Update </button>

                                                </div></p>



                                                <hr />


                                                <div class="form-group col-md-12">
                                                    <label>Vision</label>
                                                    <input type="text" class="form-control" name="vision" value="{{$details->com5}}"/>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Vision Text</label>
                                                    <textarea class="form-control" name="vision_text" style="width:100%;height: 200px;resize: none;color:black;">{{$details->com6}}</textarea>
                                                </div>











                                                <div class="button-list m-t-20 col-md-6">
                                                    <button type="submit" class="btn btn-info">  Update </button>

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
