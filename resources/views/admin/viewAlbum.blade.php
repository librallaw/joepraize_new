@extends('layouts.master')
@section('title')
    Album
@stop

@section('header_title')View Album @stop
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
                                        <p class="form-group">
                                            <label>Link</label>
                                            <input type="text" value="{{$detail -> link}}" disabled class="form-control"/>
                                        </p>

                                        <p class="text-muted">
                                            <a href="{{"/admin/edit/album/{$detail->id}"}}"><button class="btn btn-info">Edit</button></a>
                                            <button class="btn btn-danger">Delete</button>

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
