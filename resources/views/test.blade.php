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