@extends('layouts.master')

@section('title')
    Edit About
@stop


@section('header_title')Edit About  @stop

@section('content')

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to("/admin/edit/about")}}" enctype="multipart/form-data">
                                        <div class="profile-info-namess">

                                            <div class="col-md-4">
                                                <img src="@if(!empty($details->banner)){{"/".$details->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" class="img-responsive " alt="profile-image" />

                                                <input type="file" name="image" class="form-control"  />
                                            </div>



                                            <div class="profile-info-detail col-md-8">
                                                <h3 class="m-t-0 m-b-0">Edit About Page</h3><br />





                                                <div class="form-group col-md-12">
                                                    <label>Text</label>
                                                    <textarea id="textarea" class="form-control" name="text" style="height: 300px;resize: none;color:black;">{{$details -> text}}</textarea>
                                                </div>

                                                <div class="button-list m-t-20 col-md-6">
                                                    <button type="submit" class="btn btn-info">  Update </button>

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
