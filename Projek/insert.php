<?php
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['psw'];
$regional = $_POST['Regional'];


if (!empty($username) || !empty($nama) || !empty($email) || !empty($password) || !empty($regional) )
	{
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "website";
		$query = "SELECT * FROM data_user";
		
		$conn = new mysqli("localhost", "root", "", "website");
		
		if(mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT email from data_user where email = ? limit 1";
			$INSERT = "INSERT INTO data_user (username,nama,email,password,regional) values(?,?,?,?,?)";
			
			//prepare statment
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param('s',$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssss", $username, $nama, $email, $password, $regional);
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
	include "login.php";
?>