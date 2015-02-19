<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start();
if (login_check($mysqli) == true):
$username = $_SESSION['username'];
$mrusiu = $_SESSION['mrusiu'];
$missusiu = ($_POST['missusiu']);

if (castvote($username, $mrusiu, $missusiu, $mysqli) == true) {
	$_SESSION = array();
	$params = session_get_cookie_params();
	setcookie(session_name(),
        '', time() - 42000, 
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]); 
	session_destroy();
        header("Location:../success.php");
}else {
$_SESSION = array();
$params = session_get_cookie_params(); 
setcookie(session_name(),
        '', time() - 42000, 
        $params["path"], 
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]);
session_destroy();
header("Location:../index.php?nosubmit=1");
}
else: 
header ("Location:includes/logout.php");
endif;