<!DOCTYPE html>
<html>
<head>
 <title>Register | User</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="regisuser.css" type="text/css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("1212.jpg");
}
</style>
<body>
<p>
<form  action="insert.php" method="POST" name="regisuser">
  <div class="container">
	<div class="header">
		<img src="3131.jpg" alt="logo" />
		<label><h1>Register User</h1></label>
	</div>
    <label for="nama" name="name"> <b>Name</b></label>
	<input type="text" placeholder=" Enter Name" name="nama" required >
	<label for="username" name="username"> <b>UserName</b></label>
	<input type="text" placeholder="Enter UserName" name="username"  required>
    <label for="email" name="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    <label for="psw" name="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="8  characters" required>
    <label for="regional"><b>Regional :</b></label>
	<select name ="Regional" placeholder="regional" required>
		<option value="">--Regional--</option>
		<option value="Jacitase">Jacitase</option>
		<option value="Jawa Timur - Bali">Jawa Timur - Bali</option>
		<option value="Jawa Barat ">Jawa Barat</option>
		<option value="Jawa Tengah">Jawa Tengah</option>
		<option value="Kalimantan Sulawesi">kalimantan Sulawesi</option>
		<option value="Sumatra Utara ">Sumatra Utara</option>
		<option value="Sumatra Selatan">Sumatra Selatan</option>
		</select>
		<br><br>
    <hr>
   <button type="submit" class="registerbtn" name="register" value="REGISTER" >REGISTER</button>
  </div>
  <div class="container signin">
    <p>Already have an account?<a href="login.php"> Log in</p></a>
  </div>
</form>
</body>
</html>


