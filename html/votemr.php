<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
sec_session_start();    
if (login_check($mysqli) == true):
$stmt = $mysqli->prepare('SELECT * FROM malecont ORDER BY RAND()');
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
<meta charset="utf-8">
<title>Vote for Mr USIU</title>
<link rel="stylesheet" type="text/css" href="css/vote.css" media="screen">
<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<h1>Vote for Mr USIU</h1>
<h3>Select the picture of the contestant you want to vote for then click "Vote".</h3>
<div id="box">
<form method="post" action="votemiss.php">
<ul id="slider">
<?php
$x = 1;
while ($row = $result->fetch_assoc()) {
?>
    <li id="<?php echo $x++;?>">
        <img src="images/contestants/<?php echo strtolower($row["fname"]);?>.jpg" width="700" height="438">
        <p><span><button name="mrusiu" class="vote" value="<?php echo $row["fname"]; echo ' '; echo $row["lname"];?>" onclick="return confirm('Are you sure you want to vote <?php echo $row["fname"]; echo ' '; echo $row["lname"];?> as Mr USIU? Once you vote, you can not edit your response.');">Vote</button> for <?php echo $row["fname"]; echo ' '; echo $row["lname"];?></span></p>                          
	</li>
<?php
}
?>
</ul>
</form>
<ul id="thumb">
<?php
mysqli_data_seek($result, 0);
$y = 1;
while ($row = $result->fetch_assoc()) {
?>
    <li><a href="#<?php echo $y++;?>"><img src="images/contestants/<?php echo strtolower($row["fname"]);?>.jpg" title="<?php echo $row["fname"]; echo ' '; echo $row["lname"];?>" width="100%"></a></li>
<?php
}
?>
</ul>
</div>
</body>
</html>
<?php else : 
header ("Location: includes/logout.php");
endif; 
?>