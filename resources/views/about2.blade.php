<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>JoePraize -  About</title>
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

			<section id="about" class="ds ms page_about parallax section_padding_top_130 section_padding_bottom_75 table_section table_section_md columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center">
							<div class="with_frame_image"> <img src="images/about.jpg" alt="" class="rounded"> </div>
						</div>
						<div class="col-md-6">
							<h2 class="section_header with_line">Biography</h2>
							<p class="fontsize_20"> {{$details->text}}</p>
							<div class="content-justify vertical-center content-margins topmargin_25">
								<div>
									<h3 class="highlight bottommargin_0">Joe Praize</h3>
									<p class="small-text grey">Minister</p>
								</div>  </div>
						</div>
					</div>
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
	<script src="js/switcher.js"></script>
</body>

</html>