
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>



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
@include('inc/header')
    <!-- Header End -->


    <!-- Slider -->
    <div class="har_slider har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-image="/images/slider/jp_banner1.jpg">
        <!-- Over -->
        <div class="har_over" data-color="rgb(25, 0, 96)" data-opacity="0.9" data-blend="color"></div>
        <div class="har_over" data-color="#292929" data-opacity="0"></div>

        <div class="container">


            <!-- Slider Texts -->
            <div class="har_slide_txt har_slide_center_middle text-center" data-0="opacity:1; margin-top:0px" data--400-bottom="opacity:0; margin-top:-100px">
                <div class="har_slide_title har_slide_title_great">404</div>
                <div class="har_slide_desq har_slide_desq_great">Page Not Found</div>
                <p>OOPS! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND</p>
                <div class="har_slide_desq_btns">
                    <a href="{{URL::to('/')}}" class="btn">Home</a>
                </div>
            </div>
            <!-- Slider Texts End -->

        </div>
        <!-- container end -->



    </div>
    <!-- Slider End -->





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