<?php
	$db = new mysqli("localhost","root","","andromeda");
	
	
	if(isset($_POST['edit'])){
		$nik = $_POST['Updatenik'];
		$name = $_POST['Updatenama'];
		$email = $_POST['Updateemail'];
		$no_hp = $_POST['Updateno_hp'];
		$jenis_kamar = $_POST['Updatejenis_kamar'];
		$tgl1 = $_POST['Updatetgl1'];
		$tgl2 = $_POST['Updatetgl2'];
		
	$sql = "UPDATE reservasi SET nik='$Updatenik', name='$Updatename', email='$Updateemail', no_hp='$Updateno_hp', jenis_kamar='$Updatejenis_kamar', tgl2='$Updatetgl1', tgl2='$Updatetgl2' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>Data Berhasil DiUpdate</h1></center></br></br></br>";
	}else{
		echo "<br><br><br><center><h1>Data Berhasil DiUpdate</h1></center></br></br></br>".$db->error;
	}
	}

	echo "<a href='/tesbaru/tampil_reservasi.php/'> Kembali Ke Tabel</a>";
?>