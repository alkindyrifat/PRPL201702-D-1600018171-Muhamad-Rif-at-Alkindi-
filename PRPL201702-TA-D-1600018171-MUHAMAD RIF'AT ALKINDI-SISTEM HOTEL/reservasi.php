<html>
<link rel="stylesheet" href="style.css" type="text/css">
<head>
	</head>

	<body>
	<div id="header">
        <div id="header_in">
        
        <h1><a href="beranda.html"><b>THE</b> ANDROMEDA</a></h1>
        
        <div id="menu">
         <ul>
            <li><a href="beranda.html">Home</a></li>
            <li><a href="reservasi.php">Reservasi</a></li>
            <li><a href="info_kamar.php">Info Kamar</a></li>
            <li><a href="kontak.php">Contact</a></li>            
         </ul>
		 
        </div>
        
        </div>
		<div id="reserve_part">
            <div id="reserve_part_in">
		 <div id="content_inner">
            
            <!-- *** contact form *** -->
            
           <h3>Menu Reservasi</h3>
           
           <form action="insert_reservasi.php" method="post" class="formit">
                <pre>NIK		       <input class="tlp" type="number" name="nik" id="nik" placeholder="KTP(isikan dengan angka)" required><br><br>NAMA		  <input class="tlp" type="text" name="name" placeholder="NAMA ANDA" required><br>Email              <input class="tlp" type="email" name="email" placeholder="E-Mail" required><br><br>No HP             <input class="tlp" type="number" name="no_hp" placeholder="+62*******" required><br><br>Jenis Kamar    <select class="tlp" id="jenis_kamar" type="text" name="jenis_kamar" required><option value="Standar Class">Standar Class</option><option value="Middle Class">Middle Class</option><option value="Double Class">Double Class</option><option value="Super Class">Super Class</option><option value="Premium Class">Premium Class</option><option value="Eksekutif Class">Eksekutif Class</option></select><br>Check IN		<input class="tlp" type="date" name="tgl1" placeholder="Check IN" required><br>Check OUT	<input class="tlp" type="date" name="tgl2" placeholder="Check OUT" required><br><br>
                <input class="button_submit" type="submit" name="add"  value="Booking" onClick="validasi()"></pre>
            </form>
			

            <div class="cara"></div>
            
            <h3>Contact information</h3>
            
            <div class="contactinfo">
                <span class="ico_mapmark"><b>Jalan Parang Tritis No 15,Yogyakarta</b></span>    
            </div>
            
            <div class="contactinfo">
                <span class="ico_message"><b>muhamad1600018171@webmail.uad.ac.id</b></span>    
            </div>
            
            <div class="contactinfo">
                <span class="ico_iphone"><b>+6285659214843</b></span>    
            </div>
            
            <hr class="cleanit">
            
        </div>
		</div>
		</div>
    </div>
	</body>
	
</html>



