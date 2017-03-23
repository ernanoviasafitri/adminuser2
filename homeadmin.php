<?php session_start();
if (isset($_SESSION['username'])){

include "koneksi.php";
 $query=mysql_query("SELECT * from data");
 $jumlah=mysql_num_rows($query);
 echo "Selamat datang : ".$_SESSION['username'];
 echo "<br><br>";
 echo "Jumlah data ada : ".$jumlah;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">


</head>
<body background="#02a0bd">
	<h3> <a href="create.php">Tambahkan data</a> </h3>
 <table border="1">
 <tr>
 <th>No</th>
 <th>Username</th>
 <th>Password</th>
 <th>Hak Akses</th>
 <th>Nama Depan</th>
 <th>Nama Belakang</th>
 <th>Email</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>No HP</th>
 <th>Alamat Lengkap</th>
 <th>Aksi</th>
 </tr>
 <?php
 $no=0; 
 while($row=mysql_fetch_array($query)){
 ?>
 <tr>
 <td><?php echo $no=$no+1;?></td>
 <td><?php echo $row['username'];?></td>
 <td><?php echo $row['password'];?></td>
 <td><?php echo $row['hak_akses'];?></td>
 <td><?php echo $row['dpn'];?></td>
 <td><?php echo $row['blg'];?></td>
 <td><?php echo $row['email'];?></td>
 <td><?php echo $row['jk'];?></td>
 <td><?php echo $row['agama'];?></td>
 <td><?php echo $row['no_hp'];?></td>
 <td><?php echo $row['alamat'];?></td>
 <td>
 <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
 <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
 
 </td>
 </td>
 
 </tr>
 <?php
 }
 ?>
 </table><br />


									<h3>Data Sekolah</h3>
									<ul>
									<li><a href="semuadata.php">Lihat semua data sekolah</a></li>
									<li><a href="negeri.php">Lihat data sekolah negeri</a></li>
									<li><a href="swasta.php">Lihat data sekolah swasta</a></li>
									<li><a href="negeribantul.php">Lihat data sekolah negeri di Bantul</a></li>
									<li><a href="sekolahdesa.php">Lihat data sekolah di desa Bantul</a></li>
									<li><a href="nonakreditasi.php">Lihat data Sekolah belum Terakditasi</a></li>
									<li><a href="akrea.php">Lihat data Sekolah akreditasi A</a></li>
									</ul>

								
</body>
</html>
 
 <a href="logout.php">Logout</a>
  
<?php
}else{
 ?>Anda tidak boleh mengakses halaman ini. silahkan <a href="form_login.php">Login
dahulu</a><?php
}
?> 
