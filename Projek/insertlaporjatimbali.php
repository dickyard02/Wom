<?php
$Tanggal = $_POST['tanggal'];
$Jam = $_POST['jam'];
$DeskError = $_POST['deskerror'];
$PICnoHP = $_POST['picnohp'];
$CID = $_POST['cid'];
$IndikatorModem = $_POST['indikatormodem'];


if (!empty($Tanggal) || !empty($Jam) || !empty($DeskError) || !empty($PICnoHP) || !empty($CID) || !empty($IndikatorModem))
	{
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "wom123";
		$dbname = "website";
		$query = "SELECT * FROM lapor_jatimbali";
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT cid from lapor_jatimbali where cid = ? limit 1";
			$INSERT = "INSERT INTO lapor_jatimbali (tanggal,jam,deskerror,picnohp,cid,indikatormodem) values(?,?,?,?,?,?)";
			
			//prepare statment
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param('s',$CID);
			$stmt->execute();
			$stmt->bind_result($CID);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("issisi", $Tanggal,$Jam,$DeskError,$PICnoHP,$CID,$IndikatorModem);
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
	include "MAILTO:" ;
?>