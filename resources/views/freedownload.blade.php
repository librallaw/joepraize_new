
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Download</title>



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
<body class="har_middle_titles">
<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-angle-up har_go"></a>


    <!-- Header -->
    @include('inc/header')
    <!-- Header End -->

    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_wht_txt har_page_title_great har_image_bck har_fixed" data-color="rgb(41, 41, 41)" data-opacity="0.9">

        <!-- Over -->
        <div class="har_over" data-color="#000" data-opacity="0.2"></div>

        <div class="container text-left">
            <div class="row">

                <div class="col-md-12" align="center">
                    <h1 class="har_h1_title">Free Download</h1>

                </div>



            </div>
        </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">

        <!-- section -->
        <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="images/slider/sl3.jpg" data-stellar-background-ratio="0.2">
            <!--  Over-->
            <div class="har_over" data-color="rgb(41, 41, 41)" data-opacity="0.9"></div>
            <div class="container  text-center">


                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <img  src="images/people/jpsmall2.jpg"  alt="">
                    </div>
                </div>
                <!-- row end -->




                <div class="playlist-wrapper har_shop_player" id="playlist-wrapper">
                    <div class="jp-playlist container">
                        <div class="about-list clearfix">
                        </div>
                        

                    @foreach($songs as $song)
                        <!-- Item -->
                            <div class="trak-item">
                                <div class="col-md-6 text-left">
                                    <h4>{{$song->title}}</h4>
                                </div>
                                <div class="col-md-6">

                                    <a href='{{URL::to("/download/{$song->unique_id}")}}'><button class="btn btn-danger">Download</button></a>

                                </div>

                            </div>
                        @endforeach




                    </div>
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
<script src="js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>
</html>