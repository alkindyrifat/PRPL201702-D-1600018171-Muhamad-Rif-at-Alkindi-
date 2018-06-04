
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
</style>
<body>
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
		</div>

        <center><p>
		<SCRIPT language="JavaScript">
<!--
//window.onload = function(){}

function jumlah_hari(){
	var bil1 = parseFloat(document.reservasi.tgl1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.reservasi.tgl2.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	document.write("<center>STRUK TRANSAKSI</center>");
	document.write("<hr>");
	document.write("<center>ltotal hari penginapan : " + hasil +" hari</center>");
}
function harga(){
	var VIP = parseFloat(document.reservasi.jenis_kamar.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.reservasi.tgl1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.reservasi.tgl2.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = VIP * hasil;
	document.write("<center><h1>STRUK TRANSAKSI</h1></center>");
	document.write("<hr>");
	document.write("<center><h1>total hari penginapan : " + hasil +" hari</h1></center>");
	document.write("<center><h1>total pembayaran :Rp. "+ harga +"</h1></center>");
}
function denda(){
	var dnd = parseFloat(document.reservasi.nama.value);
	if (isNaN (dnd))
	VIP=0.0;
	var bil1 = parseFloat(document.reservasi.tgl1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.reservasi.tgl2.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var total = dnd * hasil;
	document.write("<center><h1>STRUK TRANSAKSI</h1></center>");
	document.write("<hr>");
	document.write("<center><h1>total denda : " + hasil +" hari</h1></center>");
	document.write("<center><h1>total nominal denda :Rp. "+ total +"</h1></center>");
}
function semua(){
	var dnd = parseFloat(document.reservasi.nama.value);
	if (isNaN (dnd))
	VIP=0.0;
	var bil1 = parseFloat(document.reservasi.tgl1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.reservasi.tgl2.value);
	if (isNaN (bil2))
	bil2=0.0;
	var VIP = parseFloat(document.reservasi.jenis_kamar.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.reservasi.tgl1.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.reservasi.tgl2.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil1 = bil2 - bil1;
	var harga = VIP * hasil1;
	
	var hasil = bil2 - bil1;
	var total = dnd * hasil;
	
	var hasil2 = harga + total;
	document.write("<center><h1>NOTA TRANSAKSI</h1></center>");
	document.write("<hr>");
	document.write("<center><table border='1' cellpadding='5' cellspacing='0'><tr bgcolor='#CCCCCC'><td>");
	document.write("<center><h1>total inap : " + hasil1 +" hari</h1></center>");
	document.write("<center><h1>total pembayaran sewa :Rp. "+ harga +"</h1></center>");
	document.write("<center><h1>total denda : " + hasil +" hari</h1></center>");
	document.write("<center><h1>total nominal denda :Rp. "+ total +"</h1></center>");
	document.write("<center><h1>total Biaya :Rp. "+ hasil2 +"</h1></center>");
	document.write("</td></tr></table></center>");
}</script></p></center>
		<center><h1>form transaksi</h1></center>
<hr>
<FORM NAME ="reservasi">
<PRE>
<font color="black">Check IN		<input class="tlp" type="text" name="tgl1" placeholder="Check IN" required><br></font>
<font color="black">Check OUT	<input class="tlp" type="text" name="tgl2" placeholder="Check OUT" required><br></font>
<table border ='1'>
	<tr><td><center>harga kamar</center></td></tr>
    <tr><td><pre><center>Standar Class : Rp 200.000 per/malam</br>middle Class : Rp 500.000 per/malam</br>Double Class  : Rp 2.000.000 per/malam</br>Super Class  : Rp 1.000.000 per/malam</br>Premium Class  : Rp 1.300.000 per/malam</br>Eksekutif Class  : Rp 2.000.000 per/malam</center></pre></td></tr>
</table>
<font color="black">harga kamar       :<input type="text" class="tlp" size="11" name="jenis_kamar"></font></br>
<font color="black">nominal denda     :<input type="text" class="tlp" size="11" name="nama" placeholder="jika ada"></font>

</PRE><br><br>
<INPUT TYPE="button" class="tlp" value="total_inap" onclick="jumlah_hari()">
<INPUT TYPE="button" class="tlp" value="total_harga" onclick="harga()">
<INPUT TYPE="button" class="tlp" value="total_denda" onclick="denda()">

<INPUT TYPE="button" class="tlp" value="total_Semua" onclick="semua()">
<INPUT TYPE="reset" class="tlp" value="Ulang"><br/><br/>
</form>
<a href="laporan_data.php" class="button_dark">Grafik</a>
		</body>		
</html>