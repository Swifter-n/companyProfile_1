<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "interaktif";
$db = mysqli_connect($localhost, $user, $pass, $dbname) or die(mysqli_error($db));
if(!$db){
  die("Koneksi Gagal"). mysqli_connect_error();
}
 ?>
