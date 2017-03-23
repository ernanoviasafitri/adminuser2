<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$namadb= "datasekolah";

	$koneksi = mysql_connect($host,$user,$pass);
	if(!$koneksi) die("Gagal koneksi ke Database MySQL");
	else{
		mysql_select_db($namadb,$koneksi)
		or die ("Database tidak ada");

	}
?>