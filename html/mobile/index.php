<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
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
<!DOCTYPE html>
<html>
<head>		
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Open Graph data -->
<meta property="og:title" content="Mr & Miss USIU-Africa Voting" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.rtmm2014.com/" />
<meta property="og:image" content="http://www.rtmm2014.com/images/ogimg.jpg" />
<meta property="og:description" content="Mr. and Miss USIU-Africa is a beauty pageant that is organized every year by the Student Affairs Council of USIU-Africa. It is a charity event wherein all the proceedings go towards helping a given charity." />          
<link rel="shortcut icon" href="images/favicon.ico">	
<link rel="stylesheet" href="css/jquery.mobile-1.4.4.min.css">
<link rel="shortcut icon" href="images/favicon.ico">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
</script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
<script type="text/javaScript" src="js/sha512.js"></script> 
<script type="text/javaScript" src="js/forms.js"></script> 
<style>
.cd{margin-left:auto;margin-right:auto;display:block;width:90px;height:96px;border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:url(images/footer.jpg);font-family: 'Istok Web', sans-serif;font-size: 46px;text-align: center;margin-top:20px;margin-bottom:30px;padding-top:10px;color:#fff;-webkit-box-shadow: 0px 10px 20px -10px #000;-moz-box-shadow: 0px 10px 20px -10px #000;box-shadow: 0px 10px 20px -10px #000; }
.small {text-align:center;font-size:14px;}
.color-style {color: red;}
</style>
</head>
<body>
<div data-role="page">
<div data-role="header"><h1>Voting &mdash; Mr and Miss USIU 2014</h1></div>
<div data-role="main" class="ui-content">
<form action="includes/process_login.php" method="post" id='login_form' name="login_form">
<div>
<h3 style="text-align: center">Polls close in:</h3>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- resp -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8065617401411952"
     data-ad-slot="9877282620"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<table style="width: 100%;">
<tr style="width: 100%">
<td style="width: 33%;text-align: center;"><div class="cd"><span id="hourdiv"></span><p class="small color-style">HOURS</p></div></td>
<td style="width: 33%"><div class="cd"><span id="mindiv"></span><p class="small color-style">MINUTES</p></div></td>
<td style="width: 33%"><div class="cd"><span id="secdiv"></span><p class="small color-style">SECONDS</p></div></td>
</tr>
</table>
<label id='error' class='error' style='display: block; font-size: 20px; color: #000000; text-align: center;'>
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
?></label>
<label for="usrnm" class="ui-hidden-accessible">School ID:</label>
<input type="text"  name="username" id="usrnm" placeholder="School ID" required>
<label for="pswd" class="ui-hidden-accessible">Password:</label>
<input type="password" name="password" id="pswd" placeholder="Barcode Number">
<div style="text-align:center"><input type="submit" style="background:#cc9900" onclick="formhash(this.form, this.form.password);" data-inline="true" value="Log in"></div>
</div>
</form>
</div>
<div data-role="footer" style="text-align: center">
<a href="http://www.rtmm2014.com?full">Desktop Site</a>
</div>
</div> 
</body>
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
    clearInterval(timer);
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
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html>
<head>
<title>Voting Closed! &mdash; Mr and Miss USIU 2014</title>		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/jquery.mobile-1.4.4.min.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
<style>
.cd{margin-left:auto;margin-right:auto;display:block;width:90px;height:96px;border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:url(images/footer.jpg);font-family: 'Istok Web', sans-serif;font-size: 46px;text-align: center;margin-top:25px;margin-bottom:100px;padding-top:10px;color:#fff;-webkit-box-shadow: 0px 10px 20px -10px #000;-moz-box-shadow: 0px 10px 20px -10px #000;box-shadow: 0px 10px 20px -10px #000; }
.small {text-align:center;font-size:14px;}
.color-style {color: red;}
</style>
</head>
<body>
<div data-role="page">
<div data-role="header">
<h1>Login</h1>
</div>
<div data-role="main" class="ui-content">
<div>
<span class="span"><h4 style="text-align: center">Welcome to Mobile Mr & Miss Voting<br>Voting Closed!</h4></span>
<table style="width: 100%;">
<tr style="width: 100%">
<td style="width: 33%;text-align: center;"><div class="cd">0<p class="small color-style">HOURS</p></div></td>
<td style="width: 33%"><div class="cd">0<p class="small color-style">MINUTES</p></div></td>
<td style="width: 33%"><div class="cd">0<p class="small color-style">SECONDS</p></div></td>
</tr>
</table>
</div></div>
<!--Insert ad here-->
<div data-role="footer" style="text-align: center">
</div>
</div>
</body>
</html>
<?php
}
?>