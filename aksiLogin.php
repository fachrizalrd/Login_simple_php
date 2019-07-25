<?php
//nama file : aksiLogin.php
session_start(); 
$user = $_POST["user"];
$pass = $_POST["password"];

$userLogin = "admin";
$passLogin = "admin";

if ($user != null || $pass != null) {
	if ($user == $userLogin && $pass == $passLogin) {
		$_SESSION["user"] = $userLogin;
		header('Location:home.php');
	} else {
		header('Location:login.php');
	}
	
} else {
	header('Location:login.php');
}

?>
