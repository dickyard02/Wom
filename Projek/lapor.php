<!DOCTYPE html>
<html>
<head>
 <title>Form Lapor</title>
 <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript" src="home.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="lapor.css" type="text/css">
 	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("1212.jpg");
}
</style>
<body>
<p>
<form  action="MAILTO:" method="post" enctype="text/plain" >
  <div class="container">
	<div class="header">
		<img src="3131.jpg" alt="logo" />
		<label><h1>Form Lapor</h1></label>
		  <div class="clock">
            <?php
			date_default_timezone_set("Asia/Jakarta");
			$time= time();
			echo date("h:i:sa");
			?>
</div>
<div class="tanggal"> 
<?php
echo date('l/m/d/Y');
?>
<br>
<?php
echo "JACITASE";
?>
	</div>
	<br>
    <label for="tanggal" name="tanggal"> <b>Tanggal</b></label>
	<br>
	<br>
	<input type="date" class="input-tanggal" required >
	<br>
	<br>
	<label for="clock" name="clock"> <b>Jam</b></label>
	<br><br>
	<input type="time" class="clock"  required>
	<br><br>
    <label for="deskripsijaringan" name="deskripsijaringan"><b>Deskripsi Error Jaringan </b></label>
    <input type="text" required>
	<br>
	<br>
	<label for="PIC" name="PIC"><b>PIC  (no HP cabang) </b></label>
	<input type="text" required>
	<br>
	<label for="wilayah" name="wilayah"><b> CID </b></label>
	<input type="text" required>
	<label for="indikator" name="inikator"><b>Indikator modem</b></label>
	<input type="text" required>
    <hr>
   <button type="submit" class="registerbtn" name="register" value="REGISTER" >LAPOR</button>
   <a href="jacitase.php"><button type="submit" class="registerbtn" name="register" value="REGISTER" >CANCEL</button></a>
 </div>
</form>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.input-tanggal').datepicker();		
	});
</script>
</html>


