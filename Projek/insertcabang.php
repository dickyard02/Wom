<?php
$KodeCabang = $_POST['Kodecbg'];
$NamaCabang = $_POST['Namacbg'];
$AlamatCabang = $_POST['alamat'];
$IPCabang = $_POST['ip'];
$CID = $_POST['cid'];
$Regional = $_POST['Regional'];
$Bandwidth = $_POST['Bandwidth'];
$Provider = $_POST['provider'];

if (!empty($KodeCabang) || !empty($NamaCabang) || !empty($AlamatCabang) || !empty($IPCabang) || !empty($CID) || !empty($Regional)|| !empty($Bandwidth)|| !empty($Provider))
	{
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "website";
		$query = "SELECT * FROM data_cabang";
		
		$conn = new mysqli("localhost", "root", "", "website");
		
		if(mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT ip from data_cabang where ip = ? limit 1";
			$INSERT = "INSERT INTO data_cabang (kode_cabang,nama_cabang, alamat_cabang, IP, cid, cabang, bandwidth, provider) values(?,?,?,?,?,?,?,?)";
			
			//prepare statment
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param('s',$IPCabang);
			$stmt->execute();
			$stmt->bind_result($IPCabang);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssssis", $KodeCabang, $NamaCabang, $AlamatCabang, $IPCabang, $CID, $Regional, $Bandwidth, $Provider);
				$stmt->execute();
				echo "";
			}else{
				echo "";
			}
			$stmt->close();
			$conn->close();
		}
	} else {
		echo "ALL Field Are Required";
		die();
	}
	include "cabang.php";
?>