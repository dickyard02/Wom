<!DOCTYPE html>
<html>
<head>
 <title>Register | Cabang</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="regiscabang.css" type="text/css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("1212.jpg");
}
</style>
<body>
<p>
<form action="insertcabang.php" method="POST" name="regiscabang" >
  <div class="container">
	<div class="header">
		<img src="3131.jpg" alt="logo" />
		<label><h1>Register Cabang</h1></label>
	</div>
	<label for="kodecbg"> <b>Kode Cabang</b></label>
	<input type="text" placeholder=" Enter Kode Cabang" name="Kodecbg"  title="only number" required>	
	<label for="Namacbg"> <b>Nama Cabang</b></label>
	<input type="text" placeholder=" Enter UserName" name="Namacbg" required>
    <label for="ip"><b>IP Address</b></label>
    <input type="text" placeholder="Enter Ip Address" name="ip" title="only number" required>
	<label for="cid"> <b>CID</b></label>
	<input type="text" placeholder=" Enter CID" name="cid" title="only number"required>
	
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
	<label for="bandwidth"><b>Bandwidth :</b></label><tr><tr><tr>
	<select name ="Bandwidth" placeholder="bandwidth" required>
		<option value="">--Bandwidth--</option>
		<option value="-">offline</option>
		<option value="64">64Kb</option>
		<option value="128">128Kb</option>
		<option value="256">256Kb</option>
		<option value="384">384Kb</option>
		<option value="512">512Kb</option>
		<option value="768">768Kb</option>
		<option value="1024">1024Kb</option>
		<option value="2024">2048Kb</option>
		<option value="4096">4096Kb</option>
		<option value="6144">6144Kb</option>
		<option value="10240">10240Kb</option>
		<option value="20 mbps">20Mbps</option>
		</select/>
		<br><br>
	<label for="provider"><b>provider :</b></label><td><td><td>
	<select name ="provider" placeholder="provider"	required>
		<option value="">--Provider--</option>
		<option value="-">offline</option>
		<option value="Direct Link">Direct Link</option>
		<option value="LINKNET">LINKNET</option>
		<option value="Lintas Arta">Lintas Arta</option>
		<option value="Telkom">Telkom</option>
		<option value="XL">XL</option>
		</select/>
	<hr>
	<label for="alamat"><b>Alamat Cabang</b></label>
    <input type="text" placeholder="Enter Alamat Cabang" name="alamat" lang="85"  required>
   <input type="submit" class="savebtn"  value="Save"></input>
	<a href="cabang.php"><button type="cancle" class="canclebtn">Cancel</button></a>
  </div>
</form>
</body>
</html>