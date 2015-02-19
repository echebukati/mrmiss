<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
$date = 'November 14 2014 12:00:00 PM GMT+3';
$exp_date = strtotime($date);
$now = time();
if ($now < $exp_date) {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Voting &mdash; Mr and Miss USIU 2014</title>
<script type="text/javascript" src="jquery/1.6.3/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<!-- Open Graph data -->
<meta property="og:title" content="Mr & Miss USIU-Africa Voting" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.rtmm2014.com/" />
<meta property="og:image" content="http://www.rtmm2014.com/images/ogimg.jpg" />
<meta property="og:description" content="Mr. and Miss USIU-Africa is a beauty pageant that is organized every year by the Student Affairs Council of USIU-Africa. It is a charity event wherein all the proceedings go towards helping a given charity." />          
<link rel="shortcut icon" href="images/favicon.ico">	
<!-- CSS STYLE -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<!-- IE Hack for Input Fields -->
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/styleadd_IE8.css" media="screen"><![endif]-->	
<link rel="stylesheet" type="text/css" href="css/theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/parallax.css" media="screen">
<script type="text/javascript" src="js/parallax/js/freshline/jquery.freshline.Parallax.min.js"></script>
<script type="text/javascript" src="js/swapme/js/freshline/jquery.freshline.Swapme.js"></script>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
</head>
<body class="bg-class">
<div class="top_background"><div class="top_background_image"></div></div>
<div class="logoholder"><div id="sitelogo"></div></div>
<div class="content_holder">
<div class="content_shadow"></div>
<div class="content">							
<div class="content-head">
<div class="subtitle">Mr and Miss USIU 2014 Voting</div>	
<div id="txtAirtime" class="title color-style">Voting Closes In:</div>	
</div>		
<div class="content-head-background"></div>	
<div class="timer">
<div class="cd first"><span id="hourdiv"></span><p class="small color-style">HOURS</p></div>
<div class="cd"><span id="mindiv"></span><p class="small color-style">MINUTES</p></div>
<div class="cd"><span id="secdiv"></span><p class="small color-style">SECONDS</p></div>
<div style="clear:both"></div>
</div>							
<div class="content-foot">
<div id="footer" style="margin-top:20px">
<table width="100%">	
<tr><td width="40%">
<h5>Enter your USIU ID number:</h5>
</td>
<td><pre></pre></td>
<td width="40%">
<h5>Enter your barcode number:</h5>
</td>
</tr>
<form action="includes/process_login.php" method="post" id='login_form' name="login_form">
<tr>
<td width="40%"><input type="text" name="username" placeholder="Enter your USIU ID number" autocomplete="off" tabindex=1 required></input></td>
<td width="20%"><input type="submit" value="GO" id="sendmail" onclick="formhash(this.form, this.form.password);" class="button small color-style" style="color: #ffffff;height: 50px; width: 50px" tabindex=3 /></td>   
<td width="40%"><input type="password" name="password" placeholder="The number at the back of your school ID" autocomplete="off" tabindex=2></input></td>
</tr>
</table>
<label id='error' class='error' style='display: block; font-size: 20px; color: #ffffff'>
<?php
        if (isset($_GET['error'])) {
            echo 'Invalid Login! You must be in session to participate!';
        } elseif(isset($_GET['already_voted'])){
            echo 'You have already voted! If you believe you have received this message in error, click <a href="mailto:echebukati@students.usiu.ac.ke?subject=Mr and Miss USIU Claim&body=My USIU ID Number is:     %0D%0A%0D%0AMy full name is:                    %0D%0A%0D%0AI think this happened because...">here</a> to submit a claim form.';
        } elseif(isset($_GET['nosubmit'])){
            echo 'We were unable to process your vote at this time. Please try again.';
        } elseif(isset($_GET['locked_out'])){
            echo 'You have been locked out after too many invalid login attempts. Click click <a href="mailto:echebukati@students.usiu.ac.ke?subject=Mr and Miss USIU Locked Out&body=My USIU ID Number is:     %0D%0A%0D%0AMy full name is:                    %0D%0A%0D%0AI think this happened because...">here</a> to explain yourself.';
        } elseif(isset($_GET['unknown_error'])){
            echo 'Unknown error. Please try again.';
        }
?>
</label>
</form>
</div>			
</div>
</div>
</div>

<div class="cloud_bottom">
<div id="cloud"  class="parallax_world" data-zoommin="100" data-zoommax="120">
<div id="cloud_4" class="parallax_world_class fadeup" data-startx="188" data-endx="88" data-startx_ie8="188" data-endx_ie8="88" data-starty="41" data-endy="-16" data-starty_ie8="41" data-endy_ie8="-16" data-startskew="0" data-endskew="0" data-zoomxoffset="0" data-zoomxendoffset="28" data-zoomxoffset_ie8="0" data-zoomxendoffset_ie8="28">
<img src="images/standard/parallax/cloud_4.png">
</div>
<div id="cloud_3" class="parallax_world_class fadeup" data-startx="825" data-endx="595" data-startx_ie8="825" data-endx_ie8="595" data-starty="94" data-endy="75" data-starty_ie8="94" data-endy_ie8="75" data-startskew="0" data-endskew="0" data-zoomxoffset="114" data-zoomxendoffset="115" data-zoomxoffset_ie8="114" data-zoomxendoffset_ie8="115">
<img src="images/standard/parallax/cloud_3.png">
</div>
<div id="cloud_2" class="parallax_world_class fadeup" data-startx="-143" data-endx="-403" data-startx_ie8="-143" data-endx_ie8="-403" data-starty="91" data-endy="76" data-starty_ie8="91" data-endy_ie8="76" data-startskew="0" data-endskew="0" data-zoomxoffset="-57" data-zoomxendoffset="-57" data-zoomxoffset_ie8="-57" data-zoomxendoffset_ie8="-57">
<img src="images/standard/parallax/cloud_2.png">
</div>
<div id="cloud_1" class="parallax_world_class fadeup" data-startx="251" data-endx="-71" data-startx_ie8="251" data-endx_ie8="-71" data-starty="159" data-endy="207" data-starty_ie8="159" data-endy_ie8="207" data-startskew="0" data-endskew="0" data-zoomxoffset="8" data-zoomxendoffset="9" data-zoomxoffset_ie8="8" data-zoomxendoffset_ie8="9">
<img src="images/standard/parallax/cloud_1.png">
</div>
<div id="your_item" class="parallax_world_class fadeup" data-startx="632" data-endx="142" data-startx_ie8="632" data-endx_ie8="142" data-starty="157" data-endy="265" data-starty_ie8="157" data-endy_ie8="265" data-startskew="0" data-endskew="0" data-zoomxoffset="0" data-zoomxendoffset="0" data-zoomxoffset_ie8="0" data-zoomxendoffset_ie8="0">
<img src="images/standard/parallax/your_item.gif">
</div>
<div id="your_item_text" class="parallax_world_class fadeup" data-startx="514" data-endx="134" data-startx_ie8="514" data-endx_ie8="134" data-starty="73" data-endy="108" data-starty_ie8="73" data-endy_ie8="108" data-startskew="0" data-endskew="0" data-zoomxoffset="-19" data-zoomxendoffset="-20" data-zoomxoffset_ie8="-19" data-zoomxendoffset_ie8="-20">
<img src="images/standard/parallax/your_item_text.png">
</div>
<div id="arrow" class="parallax_world_class fadeup" data-startx="516" data-endx="136" data-startx_ie8="516" data-endx_ie8="136" data-starty="89" data-endy="137" data-starty_ie8="89" data-endy_ie8="137" data-startskew="0" data-endskew="0" data-zoomxoffset="-13" data-zoomxendoffset="-12" data-zoomxoffset_ie8="-13" data-zoomxendoffset_ie8="-12">
<img src="images/standard/parallax/arrow.png">
</div>
</div><!-- End cloud -->
</div>

<script type="text/javascript">		
$(document).ready(function() {
$.noConflict();							
jQuery('#cloud').fhparallax({
editor:'off',
path:'parallax/js/ZeroClipboard.swf',
automatic:0,
mobile_auto_start:"yes"
});			
jQuery('#footer').swapme({});				
});
</script>
<script>
// Count down milliseconds = server_end - server_now = client_end - client_now
var server_end = <?php echo $exp_date; ?> * 1000;
var server_now = <?php echo time(); ?> * 1000;
var client_now = new Date().getTime();
var end = server_end - server_now + client_now; // this is the real end time

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour *24
var timer;

function showRemaining()
{
    var now = new Date();
    var distance = end - now;
    if (distance < 0 ) {
       clearInterval( timer );
       window.alert("Nomination Closed!");
       return;
    }
        var hours = Math.floor(distance / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('hourdiv').innerHTML = hours;
        document.getElementById('mindiv').innerHTML = minutes;
        document.getElementById('secdiv').innerHTML = seconds;
    }
    timer = setInterval(showRemaining, 1000);
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- webtop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8065617401411952"
     data-ad-slot="6336890222"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="reco">Designed and Developed by: <a href="https://twitter.com/echebukati">Emmanuel Chebukati</a>, <a href="https://www.facebook.com/showty.junior"> Peter Mburu</a>, <a href="https://www.facebook.com/joylynnKax">Chepkurui Joylynn Kirui</a>, Davy and <a href="https://www.facebook.com/mercy.wamalwa.7">Mercy Wamalwa</a>.</div>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Voting Closed! &mdash; Mr and Miss USIU 2014</title>
<script type="text/javascript" src="jquery/1.6.3/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">           
<link rel="shortcut icon" href="images/favicon.ico" >	
<!-- CSS STYLE -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<!-- IE Hack for Input Fields -->
<!--[if IE]><link rel="stylesheet" type="text/css" href="css/styleadd_IE8.css" media="screen"><![endif]-->	
<link rel="stylesheet" type="text/css" href="css/theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/parallax.css" media="screen">
<script type="text/javascript" src="js/parallax/js/freshline/jquery.freshline.Parallax.min.js"></script>
<script type="text/javascript" src="js/swapme/js/freshline/jquery.freshline.Swapme.js"></script>
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
</head>

<body class="bg-class">
<div class="top_background"><div class="top_background_image"></div></div>
<div class="logoholder"><div id="sitelogo"></div></div>
<div class="content_holder">
<div class="content_shadow"></div>
<div class="content">							
<div class="content-head">
<div class="subtitle">Mr and Miss USIU 2014 Voting</div>	
<div id="txtAirtime" class="title color-style">Voting Closed!</div>
</div>
<div class="content-head-background"></div>
<div class="timer">
<div class="cd first">0<p class="small color-style">HOURS</p></div>
<div class="cd">0</span><p class="small color-style">MINUTES</p></div>
<div class="cd">0</span><p class="small color-style">SECONDS</p></div>
<div style="clear:both"></div>
</div>
<div class="content-foot">
<!--Insert Ad here-->
</div>
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- webtop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8065617401411952"
     data-ad-slot="6336890222"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="reco">Designed and Developed by: <a href="https://twitter.com/echebukati">Emmanuel Chebukati</a>, <a href="https://www.facebook.com/showty.junior"> Peter Mburu</a>, <a href="https://www.facebook.com/joylynnKax">Chepkurui Joylynn Kirui</a>, Davy and <a href="https://www.facebook.com/mercy.wamalwa.7">Mercy Wamalwa</a>.</div></body>
</html>
<?php
}
?>