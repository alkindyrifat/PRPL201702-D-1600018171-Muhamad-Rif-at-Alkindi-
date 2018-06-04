<?php
	$db = new mysqli("localhost","root","","andromeda");
	
	$nik = @$_GET['nik'];
	$sql = "DELETE from reservasi where nik ='$nik' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>Data Berhasil Dihapus</h1></center></br></br></br>";
	}else{
		echo "<br><br><br><center><h1>Data Berhasil Dihapus</h1></center></br></br></br>".$db->error;
	}


	echo "<a href='/tesbaru/tampil_reservasi.php/'> Kembali Ke Tabel</a>";
?>