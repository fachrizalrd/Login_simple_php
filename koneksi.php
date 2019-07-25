<?php 
// nama file = koneksi.php
error_reporting(0);

$localhost = "localhost";
$database = "perusahaan";
$username = "root";
$password = "";

try{
$koneksi=new PDO("mysql:host=$localhost;dbname=$database",$username,$password);
}catch(PDOException $e){
    echo "Koneksi Gagal ".$e->getMessage();
}
?>
