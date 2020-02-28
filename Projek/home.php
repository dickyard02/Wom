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
      <a href="home.php" class="active">Dashboard</a>
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
    <?php
    echo "DASHBOARD";
    ?>
    </div>
    </div>
    <div class="tabledata">
    <table >
    <link rel="stylesheet" href="home.css" type="text/css">
    <?php
    $username = "root";
    $password = "";
    $database = "login";
    $mysqli = new mysqli("localhost", "root", "", "login");
    $query = "SELECT * FROM jacitase";
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
        echo'<tr>s
            <td>'.$namawilayah.'</td>
            <td>'.$IP.'</td>
            <td>'.$performance.'</td>
            <td>'.$lapor.'</td>				
          </tr>';
      $result->free();
    function getProperColor($performance)
    {
        if ($performance > 1 && $performance <= 99)
            return '#33cc33';
        else if ($performance >= 100)
            return  '#ffff00';
      else if ($performance == "offline")
            return  '#d9d9d9';
        else if ($performance == 0)
            return  '#e60000';
    }
    function lapor($performance)
    {
      if ($performance == 0 )
        echo '<td><button>Lapor</button></td>';
      else if ($performance == "offline")
        return '<td><p>CABANG OFFLINE<p></td>';
    }
    ?>
      </table>
    </div>
    </body>
    </html>