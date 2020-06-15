
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New releases</title>



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



</head>
<body class="har_middle_titles har_open_sans har_view_album">



<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-angle-up har_go"></a>


@include('inc/playlist')

<!-- Header -->
@include('inc/header')
<!-- Header End -->



    <!-- PAGE TITLE SMALL -->
    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-image="/images/slider/jp_banner2.jpg">


        <!-- Over -->
        <div class="har_over" data-color="#000" data-opacity="0.4"></div>

        <div class="container text-left">
            <div class="row">

                <div class="col-md-12" align="center">
                    <h1 class="har_h1_title">New Releases</h1>

                </div>



            </div>
        </div>
    </div>

    <!-- Content -->
    <section id="har_content" class="har_content">


        <!-- section -->
        <section id="services" class="har_section har_image_bck har_wht_txt" data-color="#333">
            <div class="container">

                <div class="col-md-6 har_events_inside">

                    <img src="/assets/images/everywhere.jpg" alt="">
                </div>
                <div class="col-md-6" align="center">
                    <h2 class="har_margin">JESUS EVERYWHERE</h2>

                    <p>


                        <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
                    <div id="jquery_jplayer_1" class="cp-jplayer" align="center"></div>

                    <!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->

                    <div id="cp_container_1" class="cp-container" align="center" style="width:200px;height:200px;">
                        <div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
                            <div class="cp-buffer-1"></div>
                            <div class="cp-buffer-2"></div>
                        </div>
                        <div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
                            <div class="cp-progress-1"></div>
                            <div class="cp-progress-2"></div>
                        </div>
                        <div class="cp-circle-control"></div>
                        <ul class="cp-controls">
                            <li><a class="cp-play" tabindex="1">play</a></li>
                            <li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
                        </ul>
                    </div>
                    </p>

                    <p> </p>

                    <a href="https://itunes.apple.com/ng/album/jesus-everywhere-single/id1260840698" class="btn btn-facebook">Buy on Itunes</a>


                   {{-- @if($details -> itunes != '#')
                        <a href="{{$details -> itunes}}" class="btn btn-facebook">Buy on Itunes</a>
                    @endif

                    @if($details -> spiricoco != '#')
                        <a href="{{$details -> spiricoco}}" class="btn btn-facebook">Buy on Spiricoco</a>
                    @endif

                    @if($details -> soundcloud != '#')

                        <a href="{{$details -> soundcloud}}" class="btn btn-facebook">Sound Cloud</a>
                    @endif--}}


                </div>

                <div class="col-md-12">
                    <p>

                    <h1>JESUS EVERYWHERE { LYRICS }</h1>

                    <p>
                        I see the future<br />
                        everyone talking about my Jesus<br />
                        i see the future<br />
                        everyone singing about my Jesus<br />
                        i see musicians playing<br />
                        playing for my Jesus<br />
                        i see the people dancing<br />
                        dancing for my Jesus<br />
                        Jesus in every place<br />
                        Jesus in every house<br />
                        i see there is jubilation<br />
                        celebration everywhere<br /><br /></p>

                    chorus

                    <p>
                        shout hallelujah { Halleluja }<br />
                        the name of Jesus everywhere { hallelujah }<br />
                        Jesus everywhere  { oh oh oh }<br />
                        Jesus everywhere { eh eh eh }<br />
                        all around all around all around JESUS<br />
                        everywhere everywhere everywhere JESUS<br /><br />
                    </p>



                    <p>This future is clearer now<br />
                        cos Jesus is still around<br />
                        he’s still doing good<br />
                        i see him melding broken heart<br />
                        i travel to the North<br />
                        Jesus everywhere<br />
                        i travel to the East<br />
                        Jesus everywhere<br />
                        i travel to the West<br />
                        is Jesus everywhere<br />
                        even in the South<br />
                        is Jesus everywhere<br /><br /></p>


                    chorus

                    <p>
                        shout hallelujah { Halleluja }<br />
                        the name of Jesus everywhere { hallelujah }<br />
                        Jesus everywhere  { oh oh oh }<br />
                        Jesus everywhere { eh eh eh }<br />
                        all around all around all around JESUS<br />
                        everywhere everywhere everywhere JESUS<br />
                    </p>
                </div>
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

        <!-- section -->
        <section class="har_section har_image_bck" >
            <div class="container text-center">

                <h2>Other Releases</h2>


                <!-- boxes -->
                <div class="har_icon_boxes row text-left">

                    <!-- animation -->
                    <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">


                        <!-- item -->
                        @foreach($others as $detail)
                            <div class="col-md-4 col-sm-6">
                                <div class="har_news_block text-center">
                                <span class="har_news_img" style="min-height:400px;">
                                    <img src="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" alt="">
                                    <a href="{{URL::to('/newreleases/'.$detail -> unique_id)}}" class="btn blue har_album_view har_wht_txt">
                                        View
                                    </a>

                                </span>
                                    <span class="har_news_title">{{$detail->title}}</span>
                                </div>
                            </div>
                    @endforeach
                    <!-- item -->





                    </div>

                    <!-- animation end -->

                </div>
                <!-- boxes end -->


            </div>
            <!-- container end -->
        </section>
        <!-- section end -->

        <!-- Statistics -->

        <!-- section end -->

        <!-- section -->
        <section class="har_section har_image_bck har_wht_txt" id="testimonials" data-color="#292929">
            <div class="container text-center">

                <h2>Testimonies</h2>


                <!-- boxes -->
                <div class="har_icon_boxes row text-left har_team_slider_bw">

                    <!-- animation -->
                    <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">


                        <!-- item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="har_news_block text-center">

                                <span class="har_news_author">George Wealth</span>
                                <p>Joe praise my boss you too much....Sir! .....Your songs are so powerful ...Worldly songs should go to hell,,,,gospel songs reigns only </p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="har_news_block text-center">

                                <span class="har_news_author">Solange Benson </span>
                                <p>anytime I listen to your songs, it uplift my soul and I feel reborn by the Sprite of the almighty, u are a blessing and the lord is proud of u</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="col-md-4 col-sm-6">
                            <div class="har_news_block text-center">


                                <span class="har_news_author">Robyn Odoko </span>
                                <p>Woooow this song has blessed me so much. I listen to it over n over again. It reassures me abt the Greatness of our God. Gloooory</p>
                            </div>
                        </div>


                        <div class="col-md-12" align="center">

                            <a href="{{'/testify'}}" class="btn btn-info">Send Your Testimony</a>
                        </div>
                        <!-- animation end -->

                    </div>
                    <!-- boxes end -->


                </div>
                <!-- container end -->
        </section>
        <!-- section end -->


    </section>


    <!-- Footer -->
@include ('inc/footer')
<!-- Footer End -->

</div>
<!-- Page End -->

<!-- JQuery -->
<script src="/js/jquery-1.12.3.min.js"></script>


<link rel="stylesheet" href="/lib/circle-player/skin/circle.player.css">
<script type="text/javascript" src="/lib/jquery.min.js"></script>
<script type="text/javascript" src="/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/lib/circle-player/js/jquery.transform2d.js"></script>
<script type="text/javascript" src="/lib/circle-player/js/jquery.grab.js"></script>
<script type="text/javascript" src="/lib/circle-player/js/mod.csstransforms.min.js"></script>
<script type="text/javascript" src="/lib/circle-player/js/circle.player.js"></script>
<script type="text/javascript" src="/lib/busani.js"></script>




<!-- Library JS -->
<script src="/js/harmony_library_min.js"></script>
<script src="/js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="/js/harmony_min_script.js"></script>


</body>
</html>