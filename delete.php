<?php
 include 'koneksi.php';
$id=$_GET['id'];
 mysql_query("DELETE FROM data WHERE id='$id'");
 header("location:homeadmin.php");

?>
