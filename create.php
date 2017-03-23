<!DOCTYPE html>
<html>
<head>
	<title>Input data</title>
	<script type="text/javascript">
function valregister(){
            var x=register.username.value;
            var x1=parseInt(x);
            if(register.username.value==""){
                        alert("username masih kosong");
                        register.username.focus();
                        return false;
            }
            if(isNaN(x1)==false){
                        alert("username harus huruf");
                        register.username.focus();
                        return false;          
            }
            var x=register.email.value;
            if(x==""){
                        alert("Alamat Email masih kosong");
                        register.email.focus();
                        return false;
            }else{
            var atpos=x.indexOf("@");
            var dotpos=x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
                        alert("Alamat Email Tidak Valid");
                        register.email.focus();
                        return false;
            }
            }
            var z=register.password.value;
            var panjang=z.length;
            if(register.password.value==""){
                        alert("Sandi masih kosong");
                        register.password.focus();
                        return false;
            }
            if(panjang<6 || panjang>8){
                        alert("Sandi minimum 6 karakter dan maksimum 8 karakter");
                        register.password.focus();
                        return false;
            }
            return true; 
}
</script>
</head>
<body>
<h1>Register</h1>
	
		<h3>Input data baru</h3>
		<form name="register" action="proses_create.php" method="post" enctype="multipart/form-data" onSubmit="return valregister()">
	<table>
				<tr>
					<td>Username*</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
				<td>Nama Depan</td>
				<td><input type="text" name="dpn"></td>
				</tr>
				<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="blg"></td>
				</tr>
				<tr>
				<td>Hak akses</td>
				<td>
				<select name="hak_akses">
				<option disabled selected> Pilih Hak akses</option>
				<option value="0">Admin</option>
				<option value="1">User</option>

				</select>
				</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value=""></td>
				</tr>
				<tr>
					<td>Password*</td>
					<td><input type="password" name="password"></td>
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
				<td><input type="text" name="agama"></td>
				</tr>

				<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp"></td>
				<tr>
				<td>Alamat Lengkap</td>
				<td><textarea type="text" name="alamat"></textarea><</td>
				</tr>

				<tr>
					<td></td>
					<td > <input  align="center" type="submit" name="simpan" value="Simpan"></td>
				</tr>
			</table>

		</form>
</body>
</html>
			


