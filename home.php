<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if(empty($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Management Data</title>
</head>
<body>
	<p><h2>Selamat Datang Administrator</h2></p>
	<p><a href="tampil-all.php">Management Data Karyawan</a></p>
	<p><a href="#">Management Data Guru</a></p>
	<p><a href="logout.php">Log-out</a></p>
</body>
</html>
