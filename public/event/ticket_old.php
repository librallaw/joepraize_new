<?php

	$first_name = $_GET['jsjsisueu9rw0w9e8rdhssrr8e8e'];
	$last_name = $_GET['dwerthrfwferhrwfehregrgegeg'];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ticket</title>
	<!-- include the jquery and jquery ui -->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	
	<!-- this script helps us to capture any div --> 
	<script src="html2canvas.js"></script>

	<style>
		/* these are just styles added for this demo page */
		#canvas{
			width: 572px;
			height: 400px;
			background-image: url(bg_img/ba.png);
			background-repeat:no-repeat; background-size:cover;
			margin: 0 auto;
		}

		.body{
			background-image: url(../images/slider/jp_banner1.jpg);
			background-repeat:no-repeat; background-size:cover;
		}

		body{
			background: black;
		}
		.movable_div{
			color: white;
			font-family: Verdana;
			cursor: move;
			position: absolute;
		}
		#design{
			width: 510px;
			margin: 0 auto;
			background: purple;
			border: 1px solid black;
			color : white;
			padding: 30px;
		}

		.gold{
			color:	#D5AD6D; /*if no support for background-clip*/


		}

		.tiser{
			font-size: 30px;font-weight: bold;
			font-family: Helvetica;padding-top:50px;padding-left:20px;padding-right:20px;overflow-wrap: normal;}

		h1, h3  {

			color:	#D5AD6D; /*if no support for background-clip*/

			background: -webkit-linear-gradient(transparent, transparent),
			-webkit-linear-gradient(top, rgba(213,173,109,1) 0%, rgba(213,173,109,1) 26%, rgba(226,186,120,1) 35%, rgba(163,126,67,1) 45%, rgba(145,112,59,1) 61%, rgba(213,173,109,1) 100%);
			background: -o-linear-gradient(transparent, transparent);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			font-size: 40px;
		}
		
	</style>
  </head>
  <body>
  <div class="body">
	<h3 align="center">Event Ticket</h3>
	<div align="center"><a target="_blank" style="color:white;" href="http://joepraize.com" style="color:	#D5AD6D;">Go back main site</a></div><br >



	<div id="canvas" style=" box-shadow:3px 3px 10px 5px grey;height:500px;">
        <input type='file' onchange="readURL(this);" />
        <img id="blah" src="#" alt="your image" style="border-radius: 50%;"/>

		<div style="" class="tiser" align="center"><strong>
				<div style="" class="gold">PRAISE OVATION </div></strong></div><br ><br>
		<div align="center">


			<div><strong class="use" style="font-weight:bold;font-size:20px;background:white;padding:10px;color:black;border-radius: 7px;"
"><?php echo ucfirst(strtolower($first_name))." ".ucfirst(strtolower($last_name))?> </strong></div><br><br>
		</div>

		<div style="color:white;text-align: center;font-size: 20px;font-weight:bold;font-family: 'Karla', sans-serif ">Price: Free</div><br/><br>



		<div style="text-align: center;font-weight:bold;color:white">Date</div>

		<div style="color:white;text-align: center;line-height: 100%; ">20th October, 2019</div><br><br>

		<div style="text-align: center;font-weight:bold;font-family: 'Courier New', Courier, monospace ;color:white">Venue</div>


		<div style="text-align:center;color:white;padding-bottom: 40px;padding-left: 40px;padding-right: 40px;line-height: 120%;"> LOVEWORLD ARENA LEKKI LAGOS <br><br></div>


	</div><br/><br />
	<p align="center"><input type="button" value="Process Ticket" id="capture" style="padding:10px;border-radius: 7px;" /></p>

  </div>
    <script type="text/javascript">	
		$(function(){	
			
			//to make a div draggable
			$('.movable_div').draggable(
				{containment: "#canvas", scroll: false}
			);
			
			//to capture the entered text in the textbox 
			$('#textbox').keyup(function(){
				var text = $(this).val();
				$('.movable_div').text(text);
			});	
			
			//to change the background once the user select
			$('#background').change(function(){
				var background = $(this).val();
				$('#canvas').css('background', 'url(bg_img/'+background+')');
			});
			
			//font size handler here. 
			$('#slider').change(function(){
				fontSize = $(this).val();
				$('.movable_div').css('font-size', fontSize+'px');
			});		

			//here is the hero, after the capture button is clicked
			//he will take the screen shot of the div and save it as image.
			$('#capture').click(function(){
				//get the div content
				div_content = document.querySelector("#canvas")
				//make it as html5 canvas
				html2canvas(div_content).then(function(canvas) {
					//change the canvas to jpeg image
					data = canvas.toDataURL('image/jpeg');
					
					//then call a super hero php to save the image
					save_img(data);
				});
			});			
		});


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
		
		
		//to save the canvas image
		function save_img(data){
			//ajax method.
			$.post('save_jpg.php', {data: data}, function(res){
				//if the file saved properly, trigger a popup to the user.
				if(res != ''){
					yes = confirm('Your Ticket was processed successfully, click ok to download it!');
					if(yes){

						location.href ='http://jp.test/save/ticket/'+res+'.jpg';


						/*setTimeout(function() {

							url = 'http://jp.dev/event/'+'output/'+res+'.jpg';
							 downloadFile(url); // UNCOMMENT THIS LINE TO MAKE IT WORK

						}, 2000);

// Source: http://pixelscommander.com/en/javascript/javascript-file-download-ignore-content-type/
						window.downloadFile = function (sUrl) {

							//iOS devices do not support downloading. We have to inform user about this.
							if (/(iP)/g.test(navigator.userAgent)) {
								//alert('Your device does not support files downloading. Please try again in desktop browser.');
								window.open(sUrl, '_blank');
								return false;
							}

							//If in Chrome or Safari - download via virtual link click
							if (window.downloadFile.isChrome || window.downloadFile.isSafari) {
								//Creating new link node.
								var link = document.createElement('a');
								link.href = sUrl;
								link.setAttribute('target','_blank');

								if (link.download !== undefined) {
									//Set HTML5 download attribute. This will prevent file from opening if supported.
									var fileName = sUrl.substring(sUrl.lastIndexOf('/') + 1, sUrl.length);
									link.download = fileName;
								}

								//Dispatching click event.
								if (document.createEvent) {
									var e = document.createEvent('MouseEvents');
									e.initEvent('click', true, true);
									link.dispatchEvent(e);
									return true;
								}
							}

							// Force file download (whether supported by server).
							if (sUrl.indexOf('?') === -1) {
								sUrl += '?download';
							}

							window.open(sUrl, '_blank');
							return true;
						}

						window.downloadFile.isChrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
						window.downloadFile.isSafari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;*/
					}
				}
				else{
					alert('something wrong');
				}
			});
		}
    </script>
  </body>
</html>
