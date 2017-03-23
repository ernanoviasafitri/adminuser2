<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("SELECT * from data  where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$ambil= mysql_fetch_array($query);
if($cek){
$_SESSION['username']=$username;
$_SESSION['password']=$password;
if($ambil['hak_akses']=="1"){
	header("location:homeuser.php");
}
if($ambil['hak_akses']=="0"){
	header("location:homeadmin.php");
}

}else{
 ?>Anda gagal login. silahkan <a href="form_login.php">Login kembali</a><?php
 echo mysql_error();
}




?>