<?php
$host="localhost";
$user="adminklinik";
$password="312010071";
$db="klinik_312010071";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>