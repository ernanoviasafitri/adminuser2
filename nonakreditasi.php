<?php
include 'koneksisekolah.php';
$query = mysql_query("SELECT *FROM datasekolah ");
$jumlah = mysql_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title align="center">Data Sekolah Negeri belum Terakreditasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
	</head>
	<body>
	<H1 align="center">Data Sekolah Negeri belum Terakreditasi</H1>
<a href="semuadata.php">Lihat semua data</a>

<table cellspacing="0">
	
		<tr>
		<td>Jumlah Data : </dh>
		<td><?php echo $jumlah;?></td>
		</tr>
		<br>
	
</table>
<table border="">
	<br>
	<br>

	<tr>
		<th>No</th>
		<th>Nps</th>
		<th>Nama</th>
		<th>Desa</th>
		<th>Status</th>
		<th>Akreditasi</th>
		
	</tr>
	<?php
	$no=1;
	while ($data=mysql_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $no++;?> </td>
			<td><?php echo $data['nps'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['desa'];?></td>
			<td><?php echo $data['status'];?></td>
			<td><?php echo $data['akreditasi'];?></td>
			
		</tr>
		<?php
	}
	?>
</table>

</body>
</html><?php
include 'koneksi.php';
$query = mysql_query("SELECT *FROM data_sekolah WHERE akreditasi='-'");
$jumlah = mysql_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>data sekolah Negeri</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
	</head>
	<body>
	<H3>Data Sekolah Negeri</H3>
<a href="semuadata.php">Lihat semua data</a>

<table cellspacing="0">
		<tr>
			<td><a href="descnegeri.php">Urutkan data (A-Z)</a></td>
			<td><a href="ascnegeri.php">Urutkan data (Z-A)</a></td>
		</tr>
		<tr>
		<td>Jumlah Data : </dh>
		<td><?php echo $jumlah;?></td>
		</tr>
		<br>
	
</table>
<table border="">
	<br>
	<br>

	<tr>
		<th>No</th>
		<th>Nps</th>
		<th>Nama</th>
		<th>Desa</th>
		<th>Status</th>
		<th>Akreditasi</th>
		
	</tr>
	<?php
	$no=1;
	while ($data=mysql_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $no++;?> </td>
			<td><?php echo $data['nps'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['desa'];?></td>
			<td><?php echo $data['status'];?></td>
			<td><?php echo $data['akreditasi'];?></td>
			<td>
			 <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
			 <a href="edit.php?id=<?php echo $data['id']; ?>">Update</a>
			 </td>
		</tr>
		<?php
	}
	?>
</table>

</body>
</html>