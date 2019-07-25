<?php
session_start();
// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: tampil-all.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
	<style type="text/css">
		#wrapper{
			width: 450px;
			margin: 20px auto;
		}
	</style>
</head>
<body>
<div id="wrapper">
<form method="post" action="aksiLogin.php">
	<fieldset>
		<legend>Halaman Log-in</legend>
		<label>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="user" size="27" maxlength="100" /></label><br />
          <label>password: <input type="password" name="password" size="27" maxlength="100"></label><br />
           <input type="submit" value="Masuk" /> 
           <input type="reset" value="Batal" />
	</fieldset>
</form>
</div>
</body>
</html>
