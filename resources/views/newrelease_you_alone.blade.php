
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Ceflix Videos">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    <meta property="og:title" content="JoePraize -  You Alone" />
    <meta property="og:type" content="video"  />
    <meta property="og:description" content="What if All you have been asking and praying to God for doesn’t show up , will you still STAY WITH HIM ?
How about if you got All you have been praying and asking for , Will you still STAY WITH HIM ?
I have seen many people who lost their senses immediately they got what they needed from God ... I have also seen those who couldn’t stand it or take it because they thought all they’ve asked God for he didn’t do.
This is my point here , WHETHER OR NOT YOU SEE IT HAPPEN , TELL YOURSELF I WILL STAY WITH HIM.
This background song is very special to me and I am making all effort to ensure it’s available globally in few days.
Finish this year with this in mind and also begin 2018 with this state of mind.
YOU ALONE BY JOEPRAIZE.
#youalonebyjoepraize
" />


    <meta property="og:image" content="http://joepraize.com/assets/images/you_alone.jpeg" />
    <link rel="image_src" href="http://joepraize.com/assets/images/you_alone.jpeg">







    <title>You Alone</title>



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

                    <img src="/assets/images/you_alone.jpeg" alt="">
                </div>
                <div class="col-md-6" align="center">
                    <h2 class="har_margin">You Alone</h2>

                    <p>


                        <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->


                    <!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->


                    </p>

                    <p style="text-align: left">

                        What if All you have been asking and praying to God for doesn’t show up , will you still STAY WITH HIM ?
                        How about if you got All you have been praying and asking for , Will you still STAY WITH HIM ?<br>
                        I have seen many people who lost their senses immediately they got what they needed from God ... I have also seen those who couldn’t stand it or take it because they thought all they’ve asked God for he didn’t do.<br>
                        This is my point here , WHETHER OR NOT YOU SEE IT HAPPEN , TELL YOURSELF I WILL STAY WITH HIM.<br>
                        This background song is very special to me and I am making all effort to ensure it’s available globally in few days.
                        Finish this year with this in mind and also begin 2018 with this state of mind.<br><br>
                        YOU ALONE BY JOEPRAIZE.
                        #youalonebyjoepraize
                        <br/>
                        <strong>- Joepraize</strong>
                    </p>


                    <a href="/download/you_alone" class="btn btn-facebook  btn-2x">Download for free now </a>


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
                                    <a href="{{URL::to('/newreleases/'.$detail -> id.'/'.\Str::slug(strtolower($detail -> title)))}}" class="btn blue har_album_view har_wht_txt">
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