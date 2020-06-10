
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>About</title>


    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/pdf/js/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/pdf/js/jspdf.debug.js"></script>
    <script type="text/javascript" src="/pdf/js/basic.js"></script>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('js/html2canvas.js')}}"></script>

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
    <?php
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    ?>
    <section id="har_content" class="har_content">

        <!-- section -->
        <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="images/slider/sl2.jpg" data-stellar-background-ratio="0.2">
            <!--  Over-->
            <div class="har_over" data-color="rgb(41, 41, 41)" data-opacity="0.9"></div>
            <div class="container  text-center">


                @if (Session::get('data'))

                    <div class="alert alert-success">


                        Your registraton was successfully, Click the download button to download your Ticket<br>

                    </div>
                @else

                    <div class="alert alert-danger">



                        You need to register for an event to be able to download the ticket<br>



                    </div>

                @endif
                <h2>Event Ticket </h2>

                <div class="row">
                    <div class="col-md-6 col-md-push-3">




                        <style>
                            .gold{
                                color:	#D5AD6D; /*if no support for background-clip*/




                            }

                            .tiser{
                                font-size: 30px;font-weight: bold;
                                font-family: Helvetica;padding-top:50px;padding-left:20px;padding-right:20px;overflow-wrap: normal;
                                z-index:1

                            }

                            .use{
                                color: #000000;
                                font-size: 20px;
                                border-radius: 7px;
                                padding:5px;
                                background:white;
                                font-weight: bold;
                                font-family: Helvetica;
                            }

                            .price{
                                text-align: center;
                                font-size: 20px;
                                font-weight:bold;
                                font-family: 'Karla', sans-serif
                            }

                            .con{
                                margin-left: 350px;
                                background-color: #000000;

                            }
                        </style>


                        <div id="fromHTMLtestdiv" style="" >

                            <img src="{{'/images/ba.png'}}" style="width:100%;" />

                            <div class="con">


                                <div style="" class="tiser" style="">
                                    <div style="" class="gold">{{strtoupper(Session::get('data')['event_name'])}}My Event name</div></div><br ><br>
                                <div>


                                    <div>Lawrence CHigoszie</div><br>
                                </div>

                                <div style="">Price: Free</div><br/>



                                <div style="">Date</div>

                                <div style="">{{Session::get('data')['event_time']}}</div><br>

                                <div style="">Venue</div>


                                <div style="">{{Session::get('data')['address']}}</div>

                                <div style="">Serial Number: {{generateRandomString()}}</div>
                            </div>
                        </div>

                        <br>





                    </div>
                </div> <br />
                <!-- row end -->

                    <button onclick="javascript:demoFromHTML()" class="button">Run Code</button>

               {{-- <a id="btn-Convert-Html2Image" href="#" class="btn btn-info">Download Ticket</a>--}}
                <br/>



                <!-- row end -->

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
<script>
    $(document).ready(function(){


        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable
        html2canvas(element, {
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
            }
        });


        $("#btn-Convert-Html2Image").on('click', function () {
            var imgageData = getCanvas.toDataURL("image/png");
            // Now browser starts downloading it instead of just showing it
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream;headers=Content-Disposition%3A%20attachment%3B%20filename=image.png;");
            $("#btn-Convert-Html2Image").attr("download", "event_banner.png").attr("href", newData);
        });

    });

</script>
<!-- JQuery -->
<script src="js/jquery-1.12.3.min.js"></script>
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>
</html>