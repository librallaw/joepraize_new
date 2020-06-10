@extends('layouts.master')

@section('title')
    Edit Home
@stop


@section('header_title')Edit Home  @stop

@section('content')

    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-boxss">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="bg-picture card-box">
                                    <form method="post" action="{{URL::to('/admin/edit/home/about')}}">
                                        <div class="profile-info-namess">





                                            <div class="profile-info-detail col-md-12">
                                                <h3 class="m-t-0 m-b-0">Edit Home Page [ About Section ]</h3><br />





                                                <div class="form-group col-md-12">
                                                    <label>Header</label>
                                                    <input type="text" class="form-control" name="title" value="{{$details->title}}"/>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Text</label>
                                                    <textarea class="form-control" name="text" style="width:100%;height: 200px;resize: none;color:black;">{{$details->com1}}</textarea>
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
