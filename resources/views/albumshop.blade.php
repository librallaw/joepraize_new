
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>



    <!-- Library CSS -->
    <link href="css/harmony_library_min.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/harmony_style_min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>



</head>
<body class="har_middle_titles">

<!-- Preloader -->
<div class="har_preloader">
        <span class="har_logo_eq">
            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </span>
</div>
<!-- Preloader End -->

<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go"></a>

@include('inc/playlist')
    <!-- Header -->
    @include ('inc/header')
    <!-- Header End -->


    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-color="#333" data-image="images/slider/sl2.jpg">


        <!-- Over -->
        <div class="har_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container text-left">
            <div class="row">

                <div class="col-md-12" align="center" >
                    <h1 class="har_h1_title">Shop</h1>

                </div>



            </div>
        </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">


        <!-- section -->
        <section class="har_section">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-xs-12">



                        <div class="row text-center har_shop_items">

                            <!-- item -->
                            @if(!empty($details))

                                @foreach($details as $detail)
                            <div class="har_shop_al_item_bl col-md-4">
                                <a href="#" class="har_shop_al_item">
                                <span class="har_shop_item_disk">
                                    <span class="har_shop_item_cover har_image_bck" data-image="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif">
                                       <!--SoundCloud-->

                                   </span>

                                   <span class="har_shop_item_env"></span>
                                   <span class="har_shop_item_vinyl">
                                    <span class="har_shop_item_vinyl_img har_image_bck" data-image="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif"></span>
                                    <span class="har_shop_item_vinyl_hole"></span>
                                </span>
                            </span>
                                </a>
                                <h4>{{$detail -> title}}</h4>
                                <span class="har_shop_desc">available on</span>
                                <span class="har_shop_price"></span>
                        <span class="har_shop_soc_c">
                            @if($detail -> soundcloud != "#")
                            <a href="{{$detail -> soundcloud}}"><i class="ti ti-soundcloud" title="sound cloud"></i></a>
                            @endif
                            @if($detail -> itunes != "#")
                            <a href="{{$detail -> itunes}}"><i class="ti ti-apple" title="Itunes"></i></a>
                            @endif

                            @if($detail -> spiricoco != "#")
                             <a href="{{$detail -> spiricoco}}"><i class=""><img src="{{asset('images/spiricoco.png')}}" title="Spiritcoco"/> </i></a>
                            @endif





                        </span>
                            </div>
                                @endforeach

                                @endif





                        </div>
                        <!-- slider end -->



                    </div>



                </div>



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
<script src="js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>
</html>