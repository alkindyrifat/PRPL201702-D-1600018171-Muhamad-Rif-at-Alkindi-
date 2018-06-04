<html>
<link rel="stylesheet" href="style.css" type="text/css">
	<body background="hotel4">
	<div id="header">
        <div id="header_in">
        
        <h1><a href="beranda.html"><b>THE</b> ANDROMEDA</a></h1>
        
        <div id="menu">
         <ul>
            <li><a href="beranda.html">Home</a></li>
            <li><a href="reservasi.php">Reservasi</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="info_kamar.php">Info Kamar</a></li>
            <li><a href="contact.php">Contact</a></li>            
         </ul>
		 
        </div>
        
        </div>
		</body>
		</html>
<?php
	$db = new mysqli("localhost","root","","andromeda");
	
	if(isset($_POST['add'])){
		$nik = $_POST['nik'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$jenis_kamar = $_POST['jenis_kamar'];
		$tgl1 = $_POST['tgl1'];
		$tgl2 = $_POST['tgl2'];

		$sql="INSERT INTO reservasi VALUES ('$nik','$name',
		'$email','$no_hp','$jenis_kamar','$tgl1','$tgl2')";
		$query=$db->query($sql);
		if($query){
			echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<center><h1>Data berhasil ditambah</h1></center>";
		}else{
			echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<center><h1>Data gagal ditambah</h1></center> ".$db->error;
		}
	}
	echo "<center><h2><a href='reservasi.php'> Lanjut Input Data Lagi </a></h2></center>";
?>