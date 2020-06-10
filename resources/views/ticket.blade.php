<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('js/html2canvas.js')}}"></script>
</head>
<body>
<div id="html-content-holder" style="background-image:url({{'/images/ba.jpg'}});width: 500px;color:white;">

{{--    <img src="{{'/images/people/jpsmall3.jpg'}}" style="width:100%;" />--}}
<div style="background: black;color:white;width: 150px;">SN: 233 098 344</div><br>
    <div style="font-size: 40px;font-weight: bold;
font-family: Helvetica;
text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);" align="center"><strong><u>EVENT TICKET</u></strong></div><br ><br>
    <div align="center">


    <div style="background:black;padding:20px;width:200px;border-radius: 7px;"><strong style="color: #fff;
font-size: 20px;
font-weight: bold;
font-family: Helvetica;
">Lawrence Chigozie</strong></div><br>
    </div>
    <div style="text-align: center;font-size: 20px;font-weight:bold;font-family: 'Karla', sans-serif ">Price: Free</div><br/>
    <div style="text-align: center;font-weight:bold;font-family: 'Courier New', Courier, monospace ">Friday 20th, March 2017</div><br>
    <div style="text-align: center;font-weight:bold;font-family: 'Courier New', Courier, monospace ;/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f7c23d+0,f7b100+35,fccd4d+57,f7b102+79,f9c643+100 */
background: #f7c23d; /* Old browsers */
background: -moz-linear-gradient(left, #f7c23d 0%, #f7b100 35%, #fccd4d 57%, #f7b102 79%, #f9c643 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left, #f7c23d 0%,#f7b100 35%,#fccd4d 57%,#f7b102 79%,#f9c643 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right, #f7c23d 0%,#f7b100 35%,#fccd4d 57%,#f7b102 79%,#f9c643 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7c23d', endColorstr='#f9c643',GradientType=1 ); /* IE6-9 */padding:10px;color:black">29, indial jones avenue, Lagos  apana street,Ikeja Lagos</div> <br >
</div>
<input id="btn-Preview-Image" type="button" value="Preview"/>
<a id="btn-Convert-Html2Image" href="#">Download</a>
<br/>
<h3>Preview :</h3>
<div id="previewImage">
</div>


<script>
    $(document).ready(function(){


        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable

        $("#btn-Preview-Image").on('click', function () {
            html2canvas(element, {
                onrendered: function (canvas) {
                    $("#previewImage").append(canvas);
                    getCanvas = canvas;
                }
            });
        });

        $("#btn-Convert-Html2Image").on('click', function () {
            var imgageData = getCanvas.toDataURL("image/png");
            // Now browser starts downloading it instead of just showing it
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
        });

    });

</script>
</body>
</html>