@extends('layouts.master')
@section('title')
    Shop
@stop

@section('header_title')View New Releases @stop
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
                                        <textarea disabled style="width:100%;height: 150px;resize: none;">{{$detail -> text}}</textarea>
                                        <p class="form-group">
                                            <label>Spiritcoco Link</label>
                                            <input type="text" value="{{$detail -> spiricoco}}" disabled class="form-control"/>
                                        </p>
                                        <p class="form-group">
                                            <label>Itunes Link</label>
                                            <input type="text" value="{{$detail -> itunes}}" disabled class="form-control"/>
                                        </p>
                                        <p class="form-group">
                                            <label>Sound Cloud</label>
                                            <input type="text" value="{{$detail -> soundcloud}}" disabled class="form-control"/>
                                        </p>

                                        <p class="text-muted">
                                            <a href="{{"/admin/edit/newRelease/{$detail->unique_id}"}}"><button class="btn btn-info">Edit</button></a>
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
