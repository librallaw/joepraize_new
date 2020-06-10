
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live</title>



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

                <h2>WORSHIP IN THE ROOM </h2>


                <div class="row">
                    <div class="embed-responsive embed-responsive-16by9 col-xs-12 text-center">
                        <img  src=""  alt="">

                        <iframe src="https://www.youtube.com/embed/gZ09x1DniKQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- row end -->



<br /><br />
                <div align="center">

                        <div class="alert alert-success" id="alert" style="display: none;">

                            Comment added successfully

                        </div>

                    @if (Session::get('message'))
                        <div class="alert alert-success">

                            {{ Session::get('message') }}<br>

                        </div>
                    @endif

                </div>
                <div class="col-md-8 col-sm-12 col-md-offset-2 har_form_animation">
                    <h2>Add comments</h2>

                    <form method="post" action="/live">

                        <div class="col-md-6">
                            <label>First Name</label>

                            <input type="text" class="form-control" value="{{Input::old('name')}}" placeholder="" id="first_name" name="first_name" required>
                        </div>

                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control"  value="{{Input::old('country')}}" id="last_name"placeholder="" name="last_name">
                        </div>


                        <div class="col-md-12">
                            <label>Message</label>
                            <textarea id="comments" class="form-control" placeholder="" name="comments">{{ Input::old('message') }}</textarea>
                            <input type="submit" class="btn" id="submit" value="Send">
                        </div>


                    </form>

                </div>

                <!-- row end -->
                <div class="row text-left har_single_tabs">

                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane tide in active" id="home" aria-labelledBy="home-tab">

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
<script>
    $(document).ready(function(){

        function fetchcomments(){
            $.ajax({    //create an ajax request to load_page.php
                type: "GET",
                url: "{{URL::to('/')}}/getcomments",
                dataType: "html",   //expect html to be returned
                success: function(response){
                    $("#responsecontainer").html(response);
                    //alert(response);
                }

            });
        });
        }

        $("#submit").click(function(){

            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var comments = $("#comments").val();

// Returns successful data submission message when the entered information is stored in database.
            var dataString = 'first_name='+ first_name + '&last_name='+ last_name + '&comments='+ comments;
            if(first_name==''||last_name==''||comments=='')
            {
                alert("Please Fill All Fields");
            }
            else
            {
// AJAX Code To Submit Form.
                $.ajax({
                    type: "POST",
                    url: "{{URL::to('/')}}/live",
                    data: dataString,
                    cache: false,
                    success: function(result){
                        if(result == 'true'){

                            $('#alert').show(1000);
                            $('#alert').hide(3000);


                        }
                    }
                });
            }
            return false;
        });
    });
</script>
<!-- Library JS -->
<script src="js/harmony_library_min.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Theme JS -->
<script src="js/harmony_min_script.js"></script>


</body>
</html>