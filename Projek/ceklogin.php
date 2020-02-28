<?php
session_start();
include 'koneksi.php';
 $username = $_POST['uname'];
 $password = $_POST['psw'];
 $result = mysqli_query ($koneksi,"select * from data_user where username = '$username' && password='$password'");
 $cek = mysqli_num_rows($result);
 if($cek > 0){
	 $data = mysqli_fetch_assoc($result);
	if($data['regional'] =="Jacitase"){
		$_SESSION['username']= $username;
		$_SESSION['regional']="Jacitase";
		header("location:homejacitase.php");
	}else if($data['regional']=="Jawa Timur - Bali"){
		$_SESSION['username'] = $username;
		$_SESSION['regional'] ="Jawa Timur - Bali";
		header("location:homejatimbali.php");
	}else if($data['regional']=="Jawa Barat "){
		$_SESSION['username']= $username;
		$_SESSION['regional']="Jawa Barat ";
		header("location:homejabar.php");
	}else if($data['regional']=="Jawa Tengah"){
		$_SESSION['username']=$username;
		$_SESSION['regional']="Jawa Tengah";
		header("location:homejateng.php");
	}else if($data['regional']=="Kalimantan Sulawesi"){
		$_SESSION['username']=$username;
		$_SESSION['regional']="Kalimantan Sulawesi";
		header("location:homekalsul.php");
	}else if($data['regional']=="Sumatera Utara "){
		$_SESSION['username']=$username;
		$_SESSION['regional']="Sumatra Utara ";
		header("location:homesumut.php");
	}else if($data['regional']== "Sumatera Selatan"){
		$_SESSION['username']=$username;
		$_SESSION['regional']="Sumatera Selatan";
		header("location:homesulsel.php");
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}


 ?>