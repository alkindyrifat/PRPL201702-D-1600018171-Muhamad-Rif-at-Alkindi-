<?php
	$db = new mysqli("localhost","root","","andromeda");
	

	$sql = "create table reservasi(nik varchar(10) not null primary key,
	name varchar(15),email varchar(50),
	no_hp varchar(20), jenis_kamar varchar(30),tgl1 varchar(15),
	tgl2 varchar(20))";

	$query = $db->query($sql);
	if($query){
		echo "Tabel berhasil dibuat	";
	}else{
		echo "Tabel gagal dibuat";
	}


?>