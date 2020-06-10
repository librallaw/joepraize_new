<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testify</title>


    <!-- Library CSS -->
    <link href="css/harmony_library_min.css" rel="stylesheet">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <!-- Icons CSS -->
    <link href="fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/harmony_style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">



</head>
<body class="har_middle_titles">


<!-- Preloader --
<div class="har_preloader">
<span class="har_logo_eq">
    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
</span>
</div>
<!-- Preloader End

<!-- Page -->
<div class="har_page" id="har_page">

    <!-- To Top -->
    <a href="#har_page" class="har_top ti ti-arrow-up har_go"></a>

    <!-- Audio Player -->

    <!-- Audio Player End -->


    <!-- Start Of Playlist -->


@include('inc/playlist')
<!-- End Of playlist -->



    <!-- Header -->
@include('inc/header')
<!-- Header End -->

    <div class="har_page_title har_page_title_great har_image_bck har_fixed har_wht_txt" data-stellar-background-ratio="0.2" data-color="#333" data-image="images/slider/sl2.jpg">




        <!-- Over -->
        <div class="har_over" data-color="#000" data-opacity="0.8"></div>

        <div class="container text-left">
            <div class="row">

                <div class="col-md-12" align="center" >
                    <h1 class="har_h1_title">Testify</h1>

                </div>



            </div>
        </div>
    </div>

    <!-- Slide Down -->





    <!-- Content -->
    <section class="har_section har_image_bck har_wht_txt har_fixed" data-image="images/slider/mooi.jpg" data-stellar-background-ratio="0.2" id="contacts">

        <!-- Over -->
        <div class="har_over" data-color="#000" data-opacity="0.6"></div>

        <div class="container-fluid text-center">

            @if(Session::get('message'))
                @if(Session::get('type') == 'success')
                    <div class="alert alert-success">
                        @elseif(Session::get('type') == 'error')
                            <div class="alert alert-danger">
                                @else
                                    <div class="alert alert-info">
                                        @endif


                                        {{ Session::get('message') }}

                                    </div>
                                @endif





            @if ($errors->has())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="row">
                <!-- animation -->
                <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                    <div class="col-md-8 col-sm-12 col-md-offset-2 har_form_animation">
                        <h4>I have a strong affinity to testimonies! Testimonies are a testament of the power of God, and I always encourage believers everywhere to share their testimonies- especially in the dispensation which many try to undermine the power of God. <br />

                            I’m seating right behind this form, waiting for you to share your testimonies with me!</h4>

                        <form id="" class="" method="post" action="{{URL::to('/')}}/testify">

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
                                <input type="text" class="form-control" value="{{Input::old('email')}}"  placeholder="" name="email" >
                            </div>

                            <div class="col-md-4">
                                <label>Country</label>
                                <input type="text" class="form-control" value="{{Input::old('country')}}"   name="country" >
                            </div>

                            <div class="col-md-4">
                                <label>Phone</label>
                                <input type="text" class="form-control"  value="{{Input::old('phone')}}"  name="phone" >
                            </div>


                            <div class="col-md-12">
                                <label>Testimony</label>
                                <textarea class="form-control" name="message" required>{{Input::old('message')}} </textarea>
                                <input type="submit" class="btn" value="Send">
                            </div>


                        </form>

                    </div>
                    <!-- col end -->
                </div>


            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- main section end -->


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