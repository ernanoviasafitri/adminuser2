<?php
include 'koneksisekolah.php';
$query = mysql_query("SELECT *FROM datasekolah ");
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
	<H1 align="center">Data Sekolah Negeri</H1>
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
</html>