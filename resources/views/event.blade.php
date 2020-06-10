
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>



    <!-- Library CSS -->
    <link href="css/harmony_library_min.css" rel="stylesheet">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <!-- Icons CSS -->
    <link href="fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/harmony_style_min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">

</head>
<body class="har_middle_titles" style="background:black;">
<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-angle-up har_go"></a>


    <!-- Header -->
@include('inc/playlist2')
<!-- Header -->
@include ('inc/header')
<!-- Header End -->
    <!-- Header End -->

    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-color="#0000" data-image="images/slider/jp_banner2.jpg">


        <!-- Over -->
        <div class="har_over" data-color="#00000" data-opacity="0.8"></div>

        <div class="container text-left">
            <div class="row">

                <div class="col-md-12" align="center" >
                    <h1 class="har_h1_title">Events</h1>

                </div>



            </div>
        </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">

        <!-- section -->


        <section class="har_section har_image_bck har_wht_txt har_fixed"  data-stellar-background-ratio="0.2">
            <!--  Over-->
            <div class="har_over" data-color="rgb(41, 41, 41)" data-opacity="0.9"></div>
            <div class="container  text-center">


                <div class="row har_auto_height">


                    @foreach($details as $detail)
                    <div class="col-md-3 har_image_bck har_wht_txt" data-image="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif">
                    </div>

                    <div class="col-md-3 har_image_bck har_wht_txt" data-color="#08374c">
                        <div class="har_simple_block_mini">
                            <h3 style="line-height: 110%">{{$detail->title}}</h3>
                            <h4>{{date('j/m/y',$detail->event_time)}}</h4>
                            @if(! empty($detail->address))<h5><span class="ti ti-location-pin"></span> {{$detail->address}}</h5>@endif
                            <p></p>
                            @if($detail->state == 1)

                            @if($detail->form == 1)
                            <a href="/event/{{$detail->unique_id}}" class="btn btn_border btn-xs">Register to Participate</a>

                                @endif
                            @elseif($detail->state == 0)
                                <a  class="btn btn_border btn-xs" style="background-color: darkred;">Registration closed </a>
                                @endif
                        </div>
                    </div>
                        @endforeach





                </div>


                <!-- row end -->


                </div>
                <!-- row end -->


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
<script src="js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>
</html>