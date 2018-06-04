<html>

    <link rel="stylesheet" href="style.css" type="text/css">
	<style type="text/css">  
	h1{
		font-family: sans-serif;
		color: white;
}
 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 5px 25px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
body{background-image:url("hotel3.png");background-size:cover;}
</style>
	<?php

	$db =  new mysqli("localhost","root","","andromeda");
	$sql = "SELECT * FROM reservasi";
	$data = $db->query($sql);
	
	echo "<h1> Form Pengisian Data Tamu</h1>";
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td>
	<center>Nomor Induk</center></td><td><center>Nama
	</center></td><td><center>Email</center></td><td><center>NO HP
	</center></td><td><center>Jenis Kamar
	</center></td><td><center>Check IN</center></td><td>
	<center>Check OUT</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['nik']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['no_hp']."</td>";
			echo "<td>".$row['jenis_kamar']."</td>";	
			echo "<td>".$row['tgl1']."</td>";
			echo "<td>".$row['tgl2']."</td>";
			echo "<td><a href='hapus.php?nik=".$row['nik']."'> Hapus </a></td>";
			echo "<td><a href='update.php?nik=".$row['nik']."'> Update </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Data Kosong";
	}
				  
	echo "</table>";
	echo "<a href='/tesbaru/'> Kembali Ke Menu</a>";
	$db->close();
?>
	<center>
<table border="5px">
		<foRm method='POST' action="tampil_reservasi.php">
			<tr>
				<td>
				check_in :
				<input type="date" id="tgl1" name="tgl1">
				</td>
				<td>
				check_out :
				<input type="date" id="tgl2" name="tgl2">
				<input type="submit" value="FILTER"></td>
			</tr></form></table></center></br></br>
	<tbody>
<?php

	$db =  new mysqli("localhost","root","","andromeda");
	$sql = "SELECT * FROM reservasi";
	$data = $db->query($sql);
	
	echo "<table border='1' cellpadding='5' cellspacing='0'>";
	echo "<tr bgcolor='#CCCCCC'><td>
	<center>Nomor Induk</center></td><td><center>Nama
	</center></td><td><center>Email</center></td><td><center>NO HP
	</center></td><td><center>Jenis Kamar
	</center></td><td><center>Check IN</center></td><td>
	<center>Check OUT</center></td></tr>";
	require('konek.php');
                $check_in = (isset($_POST['tgl1']) ? $_POST['tgl1'] : '');
                $check_out = (isset($_POST['tgl2']) ? $_POST['tgl2'] : '');

                  if(!$check_in == null && !$check_out == null){
                    $result = $konek->query("SELECT * FROM reservasi where tgl1 between '".$_POST['tgl1']."' AND  '".$_POST['tgl2']."' ORDER by nik ASC");
                    while ($row = mysqli_fetch_assoc($result)):
	
                    echo '<tr>';
					echo "<td>".$row['nik']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['no_hp']."</td>";
					echo "<td>".$row['jenis_kamar']."</td>";	
					echo "<td>".$row['tgl1']."</td>";
					echo "<td>".$row['tgl2']."</td>";
                    echo '</tr>';
				
				endwhile;
				 }
	echo "</table>";
	echo "<a href='/tesbaru/'> Kembali Ke Menu</a>";
	$db->close();
?>
</tbody>
</table>
<html>
<body>
                <a href="Pengecekan.php" class="button_dark">Laporan</a>
</body>
</html>