<?php
include'koneksi.php';
//menangkap variabel yang di kirim oleh view.php untuk di update
if(isset($_POST['submit'])) {

	$id 		= $GET[id];
	$username	= $_POST[username];
	$password 	= $_POST[password];
	$hak_akses	= $_POST[hak_akses];
	$dpn		= $_POST[dpn];
	$blg		= $_POST[blg];
	$email		= $_POST[email];
	$jk			= $_POST[jk];
	$agama		= $_POST[agama];
	$no_hp		= $_POST[no_hp];
	$alamat		= $_POST[alamat];

//Disini query untuk mengupdate
$query = mysql_query("UPDATE  data set username ='$username', password ='$password', hak_akses = '$hak_akses', dpn ='$dpn', blg ='$blg', email='$email', jk='$jk', agama='$agama', no_hp='$no_hp', alamat='$alamat'");
if ($query) {
	echo "berhasil diupdate";
} else {
	echo "gagal diupdate";
}
}
//header("location:homeadmin.php")
//menampilkan laporan hasil update
//jika berhasil maka akan menamplikan update berhasil bos
//jika gagal maka akan menampilkan update gagal bos

?>




	