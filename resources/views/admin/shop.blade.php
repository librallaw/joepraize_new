@extends('layouts.master')
@section('title')
    Shop
@stop

@section('header_title')Manage Shop @stop
@section('content')
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">


                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="{{route('adminShopprocess')}}" enctype="multipart/form-data">
                                <div class="p-20">
                                    <h5><b>Title</b></h5>
                                    <input type="text" class="form-control" maxlength="25" name="title" id="defaultconfig" />

                                    <div class="m-t-20">
                                        <h5><b>Banner</b></h5>
                                        <input type="file" name="image" class="form-control"  />
                                    </div>

                                    <div class="m-t-20">
                                        <h5><b>Sound Cloud link</b></h5>
                                        <input type="text" class="form-control" name="soundcloud" id="moreoptions" />
                                    </div>
                                    <div class="m-t-20">
                                        <h5><b>Itunes link</b></h5>
                                        <input type="text" class="form-control" name="itunes" id="moreoptions" />
                                    </div>
                                    <div class="m-t-20">
                                        <h5><b>Spiritcoco link</b></h5>
                                        <input type="text" class="form-control" name="spiritcoco" id="moreoptions" />
                                    </div>
                                </div>

                                    <button type="submit">Send</button>
                                </form>
                            </div><!-- end col -->


                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div>
@stop
<!-- END wrapper -->
