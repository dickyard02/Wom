<html>
<head>
	<title> Wom Finance</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="home.js"></script>
    <link type="text/css" rel="stylesheet" href="home.css">
</head>
<body>
<div class="content">
<header>
<p><img src="123.png"width ="300" height= "100" margin-top="right" background="#254d74"></p>
</header>
<div class="topnav" id="myTopnav">
  <a href="homesumut.php" class="active">Dashboard</a>
  <a href = "cabangsumut.php.php"> Cabang </a>
  <a href ="sumut.php">Regional</a>
      <a href="logout.php" style="float:right"><button type = "button"  class= "btnlogout">Log Out</button></a>
</div>
</div>
</div> 
  <div class="clock">
            <span id="hr">00</span>
            <span> : </span>
            <span id="min">00</span>
            <span> : </span>
            <span id="sec">00</span>
			<a href="regiscabang.php"><submit type="submit" class="btncabang" style="float:right">Register Cabang</submit></a>
</div>
<br>
<div class="tanggal">
<?php
echo date('l/d/m/Y');
?>
<br>
<div class="tanggal"> 
<?php
echo "CABANG SUMATRA UTARA";
?>
</div>
</div>
<div class="tabledata">
<table >
<link rel="stylesheet" href="cabang.css" type="text/css">
<?php
$username = "root";
$password = "";
$database = "website";
$mysqli = new mysqli("localhost", "root", "", "website");
$query = "SELECT * FROM data_cabang ORDER BY  cabang ASC";
echo '<table width="1300">
	<tr>
		<th> <font face= "arial">KodeCabang   </font> </td>
		<th> <font face= "arial">NamaCabang   </font> </td>
		<th> <font face= "arial">IP </font> </td>
		<th> <font face= "arial">CID      </font></td>
		<th> <font face= "arial">Regional     </font></td>
		<th> <font face= "arial">bandwidth         </font> </td>
		<th> <font face= "arial">provider  </font> </td>
		<th> <font face= "arial">Alamat     </font> </td>
	</tr>';
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()){
		$kodecabang = $row["kode_cabang"];
		$namacabang = $row["nama_cabang"];
		$IP = $row["IP"];
		$CID = $row["cid"];
		$cabang = $row["cabang"];
		$bandwidth = $row["bandwidth"];
		$provider = $row["provider"];
		$alamatcabang = $row["alamat_cabang"];
		echo'<tr>
				<td>'.$kodecabang.'</td>
				<td>'.$namacabang.'</td>
				<td>'.$IP.'</td>
				<td>'.$CID.'</td>
				<td>'.$cabang.'</td>
				<td>'.$bandwidth.'</td>
				<td>'.$provider.'</td>
				<td>'.$alamatcabang.'</td>
			</tr>';
	}
	$result->free();
}
?>
</table>
</div>
</body>
</html>