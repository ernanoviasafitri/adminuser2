<?php
include "koneksi.php";
$id = $_GET['id'];
$query_mysql = mysql_query("SELECT * FROM data WHERE id='$id'")or die(mysql_error());
$nomor = 1;
while($row = mysql_fetch_array($query_mysql)){
?>
<h3>Edit Data</h3>

<form name="register" action="proses_update.php" method="post" enctype="multipart/form-data" onSubmit="return valregister()">
	<table>
	
		<tr>	
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				<td>Username*</td>
				<td><input type="text" name="username" value="<?php echo $row['username'] ?>"></td>
				</tr>
				<tr>
				<td>Nama Depan</td>
				<td><input type="text" name="dpn" value="<?php echo $row['dpn'] ?>"></td>
				</tr>
				<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="blg" value="<?php echo $row['blg'] ?>"></td>
				</tr>
				<tr>
				<td>Hak akses</td>
				<td>
				<select name="hak_akses" value="<?php echo $row['hak_akses'] ?>">
				<option disabled selected> Pilih Hak akses</option>
				<option value="0">Admin</option>
				<option value="1">User</option>

				</select>
				</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
				</tr>
				<tr>
					<td>Password*</td>
					<td><input type="password" name="password" value="<?php echo $row['password'] ?>"></td>
				</tr>

				<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="jk" value="Laki-laki">Laki-laki
					<input type="radio" name="jk" value="Perempuan">Perempuan
					<input type="radio" name="jk" value="Lainnya">Lainnya
				</td>
				</tr>

				<tr>
				<td>Agama</td>
				<td><input type="text" name="agama" value="<?php echo $row['agama'] ?>"></td>
				</tr>

				<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp" value="<?php echo $row['no_hp'] ?>"></td>
				<tr>
				<td>Alamat Lengkap</td>
				<td><textarea type="text" name="alamat" value="<?php echo $row['alamat'] ?>"></textarea><</td>
				</tr>

				<tr>
					<td></td>
					<td > <input  align="center" type="submit" name="simpan" value="Simpan"></td>
				</tr>
			</table>

		</form>


<h4 ><a href="homeadmin.php">Kembali Kehalaman sebelumnya</a></h4>
<?php } ?>