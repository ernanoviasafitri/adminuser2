<?php 
include 'koneksisekolah.php';
$query = mysql_query("SELECT *FROM datasekolah ");
$jumlah = mysql_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>data sekolah</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
	</head>
	<body>
	<h1 align="center">Data Sekolah </h1>

<br>
<table cellspacing="0">
		<tr>
		<th>Jumlah Data : </th>
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