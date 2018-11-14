<?php
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"select * from login where username='$username' and password='$password'");
$a=mysqli_num_rows($query);
$hasil=mysqli_fetch_array($_query);
$errorMessage='';
if ($a==TRUE) {
	# code...
	$_SESSION['username']=$username;
	header('location:home.php');
	exit();
}else{
	echo"<script>alert('username atau password salah'); location='index.php';</script>";
}

?>
