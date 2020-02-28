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
  <a href="homesulsel.php" class="active">Dashboard</a>
  <a href = "cabangsulsel.php"> Cabang </a>
  <a href = "sulsel.php"> Regional</a>
<a href="login.php"style="float:right"><button type = "button" class= "btnlogout">Log Out</button></a>
</div> 
  <div class="clock">
            <span id="hr">00</span>
            <span> : </span>
            <span id="min">00</span>
            <span> : </span>
            <span id="sec">00</span>	
</div>
<br>
<div class="tanggal"> 
<?php
echo date('l/d/m/Y');
?>
<br>
<div class="tanggal"> 
<?php
echo "DASHBOARD SUMATERA SELATAN";
?>
</div>
</div>
<div class="tabledata">
<table >
<link rel="stylesheet" href="home.css" type="text/css">
<?php
$username = "root";
$password = "";
$database = "website";
$mysqli = new mysqli("localhost", "root", "", "website");
$query = "SELECT * FROM sumbagut ORDER BY 3 ASC";
echo '<table width="1300">
	<tr>
		<th> <font face= "arial">Nama Wilayah           </font> </td>
		<th> <font face= "arial">IP  </font> </td>
		<th> <font face= "arial">Performance     </font> </td>
		<th> <font face= "arial">Lapor    </font> </td>
	</tr>';
if ($result = $mysqli->query($query)) {
while ($row = mysqli_fetch_assoc($result)){
		$namawilayah = $row["nama_wilayah"];
		$IP = $row["ipaddress"];
		$performance = $row["Performance"];
		$lapor = $row["lapor"];
    echo "<tr>";
    echo "<td>$namawilayah</td>";
	echo"<td>$IP</td>";
    echo "<td bgcolor='" . getProperColor($performance) . "'>$performance</td>";
	echo lapor ($performance);
    echo "</tr>";
}
}
		echo'<tr>
				<td>'.$namawilayah.'</td>
				<td>'.$IP.'</td>
				<td>'.$performance.'</td>
				<td>'.$lapor.'</td>				
			</tr>';
	$result->free();
function getProperColor($performance)
{
    if ($performance >= 1 && $performance <= 99)
        return '#33cc33';
    else if ($performance >= 100)
        return  '#ffff00';
    else if ($performance == 0)
        return  '#e60000';
}
function lapor($performance)
{
	if ($performance == 0)
		 echo '<td><a href="emailLaporSumsel.php"><button>LAPOR</button></a></td>';
}
?>
</table>
</div>
</body>
</html>