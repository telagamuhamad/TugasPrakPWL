<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'dbconnect.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:homepage.php");
?>