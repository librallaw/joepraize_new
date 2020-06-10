@extends('layouts.master')

@section('title')
    Add Gallery
@stop


@section('header_title')Add new Image  @stop

@section('content')

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to("/admin/add/image")}}" enctype="multipart/form-data">
                                        <div class="profile-info-namess">

                                            <div class="col-md-4">

                                                <label>Select Image </label>
                                                <input type="file" name="image" class="form-control"  />
                                            </div>

                                            <button class="btn btn-success" type="submit">Submit</button>






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
