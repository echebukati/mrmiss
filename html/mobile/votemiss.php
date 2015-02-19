<?php
include_once '../../includes/db_connect.php';
include_once '../../includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true):
$_SESSION['mrusiu']=($_POST['mrusiu']);
if(!isset($_SESSION['mrusiu']) || empty($_SESSION['mrusiu'])) {
   header ("Location: votemr.php");
}  
$stmt = $mysqli->prepare('SELECT * FROM femalecont ORDER BY RAND()');
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
<title>Vote for Miss USIU</title>		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/voting.css">
<link rel="stylesheet" href="css/jquery.mobile-1.4.4.min.css">
<link rel="shortcut icon" href="images/favicon.ico">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
</script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
</head>
<body>
<div data-role="page">
<div data-role="header">
<h1>Vote for Miss USIU</h1>
</div>
<p style="text-align:center;">Scroll through, select your preferred candidate then click the below "Vote" button:</p>
<form method="post" action="includes/process_vote.php">
<fieldset class="voting">
<?php
while ($row = $result->fetch_assoc()) {
?>
<section>
<h2 style="text-align: center;"><?php echo $row["fname"]; echo ' '; echo $row["lname"];?></h2>
<img src="images/contestants/<?php echo strtolower($row["fname"]);?>.jpg">
<button name="missusiu" style="background: #CC9900; color:rgb(178, 34, 34);" value="<?php echo $row["fname"]; echo ' '; echo $row["lname"];?>" data-inline="false" onclick="return confirm('Are you sure you want to vote <?php echo $row["fname"]; echo ' '; echo $row["lname"];?> as Mr USIU? Once you vote, you cannot edit your response.');">Vote</button>
</section>
<?php
}
?>
</fieldset>
</form>
</div>
</body>
</html>
<?php else : 
header ("Location: includes/logout.php");
endif; 
?>