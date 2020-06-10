
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>



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

    <!-- Header End -->
@include('inc/playlist')
<!-- End Of playlist -->



    <!-- Header -->
    @include('inc/header')
    <!-- Header End -->
    <section id="har_content" class="har_content">

        <!-- section -->
        <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="images/slider/sl2.jpg" data-stellar-background-ratio="0.2">
            <!--  Over-->
            <div class="har_over" data-color="rgb(41, 41, 41)" data-opacity="0.9"></div>
            <div class="container  text-center">

                <h2>About Me</h2>

                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <img  src="{{asset('/').'/'.$details->banner}}"  alt="">
                    </div>
                </div>
                <!-- row end -->


                <!-- row end -->
                <div class="row text-left har_single_tabs">

                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane tide in active" id="home" aria-labelledBy="home-tab">
                            {{$details->text}}
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


    @include ('inc/footer')

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