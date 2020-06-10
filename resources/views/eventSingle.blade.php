
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>



    <!-- Library CSS -->
    <link href="/css/harmony_library_min.css" rel="stylesheet">
    <link href="/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <!-- Icons CSS -->
    <link href="/fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/harmony_style_min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">

</head>
<body class="har_middle_titles">
<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-angle-up har_go"></a>


    <!-- Header -->
@include('inc/playlist2')
<!-- Header -->
@include ('inc/header')
    <!-- Header End -->

    <!-- PAGE TITLE SMALL -->


    <!-- Content -->
    <section id="har_content" class="har_content">

        <!-- section -->
        <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="/images/slider/sl_2.jpg" data-stellar-background-ratio="0.2">
            <!--  Over-->
            <div class="har_over" data-color="#000000" data-opacity="1"></div>
            <div class="container  text-center">

                <h2>{{$details->title}}</h2>
                <h3>{{$details->address}}</h3>
                <div class="row">
                    @if (Session::get('message'))
                        <div class="alert alert-success">

                            {{ Session::get('message') }}<br>

                        </div>
                    @endif

                    @if ($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                    <div class="col-md-6">
                        <img  src='@if(!empty($details->banner)){{"/".$details->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif '/>
                    </div>

                    <div class="col-md-6 ">


                        @if($details -> state == 0)
                            <button class="btn btn-danger" style="background-color: darkred;color:white;">Sorry Registration for this event has been closed </button>
                        @elseif($details -> state == 1)
                        <form id="" class="" method="post" action="{{URL::to('/event/register')}}">

                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="{{Input::old('first_name')}}" placeholder="" name="first_name" required>
                            </div>

                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="{{Input::old('last_name')}}" placeholder="" name="last_name" required>
                            </div>



                            <div class="col-md-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control" value="{{Input::old('email')}}"  placeholder="" name="email" required>
                            </div>

                            <div class="col-md-4">
                                <label>Country</label>
                                <input type="text" class="form-control" value="{{Input::old('country')}}"   name="country" required>
                            </div>

                            <div class="col-md-4">
                                <label>Phone</label>
                                <input type="text" class="form-control"  value="{{Input::old('phone')}}"  name="phone" required >
                                <input type="hidden" class="form-control"  value="{{$details->unique_id}}"  name="unique_id" >
                            </div>


                            <div class="col-md-12">
                                <label>Expectation</label>
                                <textarea class="form-control" name="expectation"  required>{{Input::old('expectation')}} </textarea>
                                <input type="submit" class="btn" value="Send">
                            </div>


                        </form>
                            @endif

                    </div>
                </div>
                <!-- row end -->


                <!-- row end -->
                <div class="row text-left har_single_tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <h3 role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Expectations</a></h3>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <div role="tabpanel" class="tab-pane tide active" id="profile" aria-labelledBy="profile-tab">
                            <!--  Comments -->
                            <section class="comments clearfix" style="max-height: 600px;overflow: scroll;overflow-x: hidden;overflow-y: auto">
                                <div class="comments-content">
                                   @if($expectations->count() > 0 )
                                    @foreach($expectations as $details)
                                        @if($details->expectation == '#')
                                            <?php continue;?>
                                            @endif
                                        <div class="answer">

                                        <div class="content-cmt">
                                            <span class="name-cmt">{{$details->first_name." ".$details->last_name}} </span>
                                            <span class="date-cmt"></span>
                                            <p class="content-reply">
                                                {{ucfirst(strtolower($details->expectation))}}
                                            </p>
                                        </div>
                                    </div>
                                        @endforeach
                                       @endif


                                </div>
                            </section>
                            <!-- End Comments -->
                        </div>
                    </div>
                    <!-- tab end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    </section>
    <!-- section end -->





    <!-- Footer -->
    @include('inc/footer')
    <!-- Footer End -->

</div>
<!-- Page End -->

<!-- JQuery -->
<script src="/js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="/js/harmony_library_min.js"></script>
<script src="/js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="/js/harmony_min_script.js"></script>


</body>
</html>