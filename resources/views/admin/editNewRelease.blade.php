@extends('layouts.master')
@section('title')
    Shop
@stop

@section('header_title')Edit New Release @stop
@section('content')
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to("/admin/edit/newRelease/{$details->unique_id}")}}" enctype="multipart/form-data">
                                        <div class="profile-info-namess">

                                            <div class="col-md-4">
                                                <img src="@if(!empty($details->banner)){{"/".$details->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" class="img-responsive " alt="profile-image" />

                                                <input type="file" name="image" class="form-control"  />
                                            </div>



                                            <div class="profile-info-detail col-md-8">
                                                <h3 class="m-t-0 m-b-0">Edit Item</h3>

                                                <div class="form-group col-md-6">
                                                    <label>Title</label>
                                                    <input type="text" value="{{$details -> title}}"  class="form-control" name="title"/>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Spiritcoco Link</label>
                                                    <input type="text" value="{{$details -> spiricoco}}"  class="form-control" name="spiritcoco"/>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Itunes Link</label>
                                                    <input type="text" value="{{$details -> itunes}}"  class="form-control" name="itunes"/>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Sound Cloud</label>
                                                    <input type="text" value="{{$details -> soundcloud}}"  class="form-control" name="soundcloud"/>
                                                    <input type="hidden" value="{{$details -> banner}}"  class="form-control" name="banner"/>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Free download </label>
                                                    <input type="text" value="{{$details -> free_download}}"  class="form-control" name="free_download"/>

                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Text</label>
                                                    <textarea class="form-control" name="text">{{$details -> text}}</textarea>
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
