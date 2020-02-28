<html>
<head>
<title>LOGIN PAGE</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css" type="text/css">
<script language= "javascript">
</script>
</head>
<body>
<style>
body {
		background-image: url("1212.jpg");
}
</style>
<form action="ceklogin.php" name="loginForm"  method="POST">
<div class="container">
<div class="header">
	<img src="3131.jpg" alt="logo" />
	<label><h2>WELCOME</h2></label>
</div>
	<label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="unamee" required>
	<label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
	<h4>Username atau Password Salah</h4>
	<hr>
<input type="submit" value="Login" class="button"  ></input> </form>
	<input type="checkbox" checked="checked" required><span>Ingat Saya</span>
<div class="container" style="background-color:#f1f1f1">
    <p class="message">Not registered? <a href="registrasiuser.php">Create an account</a></p>
  </div>
</form>
</body>
</html>
