<!-- <?php
    include 'koneksi.php';
    session_start();
    if(isset($_GET['user'])){
        $user = $_GET['user'];
        $get_user = $mysqli->query("SELECT username,nama,email,regional from data_user WHERE username = '$user'");
        if($get_user->num_rows == 1){
            $profile_data = $get_user->fetch_assoc();
        }
    }
    global $profile_data;
?> -->
<!DOCTYPE HTML>
<html>
    <head>
      <title> Wom Finance</title>
      <script type="text/javascript" src="jquery.js"></script>
      <script type="text/javascript" src="Home.js"></script>
        <link type="text/css" rel="stylesheet" href="Profile.css">
    </head>
    <body>
    <div class="content">
    <header>
    <p><img src="123.png"width ="300" height= "100" margin-top="right" background="#254d74"></p>
    </header>
    <div class="topnav" id="myTopnav">
      <a href="Profile.php" class="active">Profile</a>
      <a href = "cabang.php"> Cabang </a>
      <div class="dropdown">
        <a href="dropbtn">Regional
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="jacitase.php">Jacitase</a>
          <a href="jatimbali.php">Jawa Timur-Bali</a>
          <a href="jabar.php">Jawa Barat</a>
          <a href="jateng.php">Jawa Tengah</a>
          <a href="kalsul.php">kalimantan-Sulawesi</a>
          <a href="sumut.php">Sumatra Utara</a>
          <a href="sulsel.php">Sumatra Selatan</a>
    </div>
    </div>
    <a href="login.php"style="float:right"><button type = "button" class= "btnlogout"  >Log Out</button></a>
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
<!--     <tr>
        <?php 
        if(isset($_GET['regional'])){
        $user = $_GET['regional'];
        $get_user = $mysqli->query("SELECT regional from data_user WHERE regional = '$user'");
        }
        echo $get_user['regional'];
        ?>
    </tr> -->
    </div>
    </div>
    <div class="tabledata">
    <table >
    <link rel="stylesheet" href="home.css" type="text/css">

  <body>    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="index.php">Home</a> | <?php echo $profile_data['username']?>'s Profile
        <h3>Personal Information | <?php $visitor = $_SESSION['username'];
        if($user == $visitor){
            ?>
            <a href="edit.profile.php?user=<?php echo $profile_data['username']?>">Edit Profile</a>
            <?php
        }?>
        </h3>

        <table>
            <h4>
                <tr>
                    <td>Name    : <td></td><?php echo $profile_data['nama']?></td>
                </tr>
                <tr>
                    <td>Username: <td></td><?php echo $profile_data['username']?></td>
                </tr>
                <tr>
                    <td>Email   : <td></td><?php echo $profile_data['email']?></td>
                </tr>
                <tr>
                    <td>Regional: <td></td><?php echo $profile_data['regional']?></td>
                </tr>
            </h4>
        </table>

    </body>
  </body>
</html>
