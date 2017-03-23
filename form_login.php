<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Form Login</title>
 <link rel="stylesheet" href="font-awesome/css/font-awesome.css">


<!--menghubungkan script CSS ke HTML-->
 <link rel="stylesheet" href="login.css">
 <script type="text/javascript">
                               function cekData()
                               {
                               // Cek isi kotak teks username
                               if (login.username.value == "")
                               {
                               alert("Username Harus Di Isi");
                               login.username.focus();
                               return false;
                               }
                               // Cek isi kotak teks password
                               if (login.password.value == "")
                               {
                               alert("Password Harus Di Isi");
                               login.password.focus();
                               return false;
                               }
                               else
                               return true;
                               }
               </script>
</head>
<body>
<!--membuat form login dari agus tutorial-->
 <div class="login">
 
   <form id="login" action="login_proses.php" method="post" onsubmit="return cekData();">
  <h3 class="caption" align="center">Silahkan Login</h3>
  <br>
   <input type="text"  name="username" placeholder="Username..." >
   <input type="password" name="password" placeholder="Password..." >
   <br>
   <input type="submit" name="simpan" value="Login"></td>
   
   
  </form>
 </div>
 
</body>
</html>