<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');

	$username	= $_POST['username'];
	$password 	= $_POST['password'];
	$hak_akses	= $_POST['hak_akses'];
	$dpn		= $_POST['dpn'];
	$blg		= $_POST['blg'];
	$email		= $_POST['email'];
	$jk			= $_POST['jk'];
	$agama		= $_POST['agama'];
	$no_hp		= $_POST['no_hp'];
	$alamat		= $_POST['alamat'];


	$input = mysql_query("INSERT INTO data VALUES(NULL, '$username', '$password', '$hak_akses', '$dpn', '$blg', '$email', '$jk','$agama','$no_hp', '$alamat')") or die(mysql_error());

	if ($input) {
		 header("location:homeadmin.php");
	}

	else
		echo "Gagal input data";
}

else
	echo '<script>window.history.back()</script>';

?>