<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>JoePraize -  Welcome</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/cue.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/mediaelementplayer-legacy.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image fa-spin"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->


			@include('inc/header2')





			<section class="intro_section page_mainslider ds">
				<div class="flexslider" data-dots="true" data-nav="te">
					<ul class="slides">
						<li> <img src="jp_banner3.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h2> <span class="small">Welcome to </span> 
															</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInUp">
													<p>A Music Minister Made by God</p>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li> <img src="jp_banner4.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInUp">
													<h2> <span class="small">Music is not Music if it cannot reach
														the soul</span>  </h2>
												</div>
												<div class="intro-layer" data-animation="fadeInUp">

												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			<section id="about" class="ds ms page_about parallax section_padding_top_130 section_padding_bottom_75 table_section table_section_md columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center">
							<div class="with_frame_image"> <img src="images/about.jpg" alt="" class="rounded"> </div>
						</div>
						<div class="col-md-6">
							<h2 class="section_header with_line">Biography</h2>
							<p class="fontsize_20">Joseph Omo Ebhodaghe also known as  is a music minister by the will of God, a worship leader, song writer and Arranger, performing artiste, multiple award winner. His love for God and passion for the gospel is evident in the lyrics of his songs and the power in his ministrations on stage</p>
							<p>“I love to lead God’s people in praise and worship, because to me, it is one of the biggest opportunities I have received from God. I do other genre of music though, but I love to praise and worship Jesus all the time. It’s a blessing to be in a position where God can trust you to lead his people in songs of praise and worship to him. So, in all, I can say I do songs that bless and reach the spirit, soul and bodies of my listeners,” he said, adding that, “I am a recording artiste, my first album was released in November 2009, I released a single, ‘Great and Mighty God’ in 2007 and the song is fulfilling its purpose."</p>
							<div class="content-justify vertical-center content-margins topmargin_25">
								<div>
									<h3 class="highlight bottommargin_0">Joe Praize</h3>
									<p class="small-text grey">Minister</p>
								</div>
								<!--<img src="images/signature.png" alt=""> -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="events" class="ds ms section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Featured Singles</h2>
							<div class="owl-carousel topmargin_60" data-dots="false" data-nav="true" data-responsive-lg="3">

								@if($new_release)
									@foreach($new_release as $detail)
										<div class="vertical-item content-absolute hover-entry-content">
											<div class="item-media mutted-media ds"> <img src="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" alt="">
												<div class="entry-meta-corner grey"> <span class="big"><a href="{{URL::to('/newreleases/'.$detail -> id.'/'.\Str::slug(strtolower($detail -> title)))}}"><i class="fa fa-play-circle"></i></a></span> <span class="small-text"></span> </div>
											</div>
											<div class="item-content cs">
												<h3 class="entry-title bottommargin_0"> <a href="{{URL::to('/newreleases/'.$detail -> id.'/'.\Str::slug(strtolower($detail -> title)))}}">{{$detail->title}}
													</a> </h3>
													<p class="small-text bottommargin_0"> </p>
												<div class="entry-content">
													<p>{{$detail->text}} </p>
													<p class="topmargin_20 event_buttons">  <a href="{{URL::to('/newreleases/'.$detail -> id.'/'.\Str::slug(strtolower($detail -> title)))}}" class="theme_button inverse">Read More</a> </p>
												</div>
											</div>
										</div>
									@endforeach
									@endif



							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="featured-video" class="ds parallax section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center"> <a href="https://www.youtube.com/watch?v=EoYBX-LG5n4" class="theme_button inverse round_button margin_0" data-gal="prettyPhoto[gal-video]">
					<i class="fa fa-play" aria-hidden="true"></i>
				</a>
							<h2 class="section_header bottommargin_0"> DONE ME WELL BY  { LYRICS VIDEO } </h2>
						</div>
					</div>
				</div>
			</section>


			<section id="latest-album" class="ds ms page_latest_album parallax section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Recent Playlist</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="vertical-item slide-media opened-media">
								<div class="item-media-wrap"> <img src="@if(!empty($new_release[0]->banner)){{"/".$new_release[0]->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" alt="">
									<div class="item-media back-media"> <img src="images/albums/cd.png" alt=""> </div>
									<div class="item-media with_frame_image"> <img src="@if(!empty($new_release[0]->banner)){{"/".$new_release[0]->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" alt="">
										<div class="media-links no-overlay">
											<div class="links-wrap"> <span>
										<i class="fa fa-play highlight" aria-hidden="true"></i>
									</span> </div>
										</div>
									</div>
								</div>
								<div class="item-content topmargin_35">
									<h3 class="entry-title"> <a href="{{URL::to('/newreleases/'.$detail -> id.'/'.\Str::slug(strtolower($detail -> title)))}}">{{$new_release[0]->title}}</a> </h3>


								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<article>
								<div class="entry-content">
									<div class="cue-playlist-container">
										<div class="cue-playlist cue-theme-default">
											<ol class="cue-tracks"></ol>
										</div>
										<script type="application/json" class="cue-playlist-data">
											{
												"embed_link": "",
												"permalink": "",
												"skin": "",
												"thumbnail": "images/albums/background.jpg",
												"tracks": [
												{
													"artist": "",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 1,
													"audioUrl": "/songs/Done_me_well.mp3",
													"format": "mp3",
													"length": "5:55",
													"title": "Done me well",
													"order": 0,
													"mp3": "/songs/Done_me_well.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "5:55"
													},
													"src": "/songs/Done_Me_Well.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												},
												{
													"artist": "",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 2,
													"audioUrl": "/songs/Powerful_Jesus.mp3",
													"format": "mp3",
													"length": "7:48",
													"title": "Powerful Jesus",
													"order": 0,
													"mp3": "/songs/Powerful_Jesus.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "7:48"
													},
													"src": "/songs/Powerful_Jesus.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												},
												{
													"artist": "",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 3,
													"audioUrl": "/songs/praise_oviation.mp3",
													"format": "mp3",
													"length": "11:36",
													"title": "Praize Ovation",
													"order": 0,
													"mp3": "/songs/praise_oviation.mp3",
													"meta":
													{
														"artist": "AndreySkarlat",
														"length_formatted": "11:36"
													},
													"src": "/songs/praise_oviation.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												},
												{
													"artist": "",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 4,
													"audioUrl": "/songs/The-Name-of-Jesus-preview-.mp3",
													"format": "mp3",
													"length": "4:26",
													"title": "The Name of Jesus",
													"order": 0,
													"mp3": "/songs/praise_oviation.mp3",
													"meta":
													{
														"artist": "",
														"length_formatted": "4:26"
													},
													"src": "/songs/The-Name-of-Jesus-preview-.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												},
												{
													"artist": " ft Preye Odede",
													"artworkId": 0,
													"artworkUrl": "#0",
													"audioId": 5,
													"audioUrl": "/songs/More-Than-Enough-preview.mp3",
													"format": "mp3",
													"length": "3:30",
													"title": "More than enough",
													"order": 0,
													"mp3": "/songs/More-Than-Enough-preview.mp3",
													"meta":
													{
														"artist": " ft Preye Odede",
														"length_formatted": "3:30"
													},
													"src": "/songs/More-Than-Enough-preview.mp3",
													"thumb":
													{
														"src": "images/albums/04.jpg"
													}
												}

												]
											}
										</script>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<section id="contact" class="ds ms background_cover page_contact section_padding_top_150 section_padding_bottom_150">
				<div class="container">
					<div class="row">
						@if (Session::get('message'))
							<div class="alert alert-success">

								{{ Session::get('message') }}<br>

							</div>
						@endif

						@if ($errors->has())
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									{{ $error }}<br>
								@endforeach
							</div>
						@endif
						<div class="col-sm-6 col-sm-offset-6 text-center">
							<h2 class="section_header with_line" style="color:#dd4377">Contact for Booking</h2>
							<p class="" style="color:#dd4377"> For booking and press inquiries please contact me by filling the form or calling the number: +234 803 288 5692 </p>
							<form class="contact-form columns_padding_10 topmargin_30" method="post" action="{{URL::to('/')}}/feedback">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group margin_0"> <label for="name">Full Name <span class="required">*</span></label>  <input type="text" class="form-control" value="{{Input::old('name')}}" placeholder="Name" name="name" required> </div>
									</div>

									<div class="col-md-6">
										<div class="form-group margin_0"> <label for="email">Country<span class="required">*</span></label>  <input type="text" class="form-control"  value="{{Input::old('country')}}" placeholder="Country" name="country"> </div>
									</div>

									<div class="col-md-6">
										<div class="form-group margin_0"> <label for="email">Email<span class="required">*</span></label>  <input type="text" class="form-control" placeholder="Email Address" value="{{Input::old('email')}}" name="email" required> </div>
									</div>

									<div class="col-md-6">
										<div class="form-group margin_0"> <label for="email">Phone<span class="required">*</span></label> <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{Input::old('phone')}}" required> </div>
									</div>

									<div class="col-md-12">
										<div class="form-group margin_0"> <label for="message">Message</label> <textarea class="form-control" placeholder="Message" name="message">{{ Input::old('message') }}</textarea> </div>
									</div>
								</div>
								<div class="row topmargin_20">
									<div class="col-sm-12">
										<div class="contact-form-submit text-center"> <button type="submit" id="" name="contact_submit" class="theme_button color1 min_width_button">Submit now</button> </div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<section id="news" class="ds ms section_padding_top_150 section_padding_bottom_130">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_line">Recent Albums</h2>
							<div class="owl-carousel topmargin_60" data-responsive-lg="3" data-dots="true">

								@if($albums)
									@foreach($albums as $detail)
								<article class="vertical-item content-padding with_background rounded text-center offset_button">
									<div class="item-media top_rounded overflow_hidden"> <img src="@if(!empty($detail->banner)){{"/".$detail->banner}}@else {{"/images/people/jpsmall3.jpg"}} @endif" alt="">
										<div class="media-links"> <a href="{{$detail->itunes}}" class="abs-link"></a> </div>
									</div>
									<div class="item-content">
										<header class="entry-header">
											<div class="entry-meta small-text content-justify"> <span class="greylinks">

									</span> <span class="categories-links highlightlinks">
										<a href="{{$detail->itunes}}"></a>
									</span> </div>
											<h4 class="entry-title"> <a href="{{$detail->itunes}}">{{$detail->title}}</a> </h4>
										</header>
										<div class="entry-content">
											 <span class="button_wrap">
									<a href="{{$detail->itunes}}" class="theme_button color1">Read More</a>
								</span> </div>
									</div>
								</article>
									@endforeach
								@endif




							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="gallery" class="ds ms">
				<div class="owl-carousel gallery-carousel" data-responsive-xlg="8" data-responsive-lg="6" data-responsive-md="5" data-responsive-sm="4" data-responsive-xs="2" data-loop="true" data-margin="0" data-nav="true">
					@if($images)
						@foreach($images as $image)

							<div class="vertical-item corporate consulting">
								<div class="item-media"> <img src="{{$image->path}}" alt="">
									<div class="media-links"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{$image->path}}"></a> </div>
								</div>
							</div>
						@endforeach
					@endif


				</div>
			</section>

			@include('inc/footer2')
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/mediaelement-and-player.min.js"></script>
	<script src="js/mediaelement-migrate.min.js"></script>
	<script>
		/* <![CDATA[ */
		var _cueSettings = {
			"l10n":
			{
				"nextTrack": "Next Track",
				"previousTrack": "Previous Track",
				"togglePlayer": "Toggle Player",
				"togglePlaylist": "Toggle Playlist"
			}
		};
		/* ]]> */
	</script>
	<script src="js/cue.min.js"></script>

</body>

</html>