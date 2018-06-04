<html>
    <head>
        <title>LAPORAN</title>
        <script src="Chart.bundle.js"></script>
    
    <link rel="stylesheet" href="style.css" type="text/css">
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
	</body>
<br><br><br><br><br><br>
        <div class="container">
            <canvas id="myChart" width="10" height="5"></canvas>
        </div>
		<center><p>
		<script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Standar Class", "Middle Class", "Double Class","Super Class","Premium Class","Eksekutif Class"],
                    datasets: [{
                            label: '#of Votes',
                            data: [1, 1, 2,1,2,3  ],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(154, 162, 235, 1)',
                                'rgba(250, 200, 70, 1)',
                                'rgba(75, 192, 192, 1)',
								'rgba(89, 205, 60, 1)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(154, 162, 235, 1)',
                                'rgba(250, 200, 70, 1)',
                                'rgba(75, 192, 192, 1)',
								'rgba(89, 205, 60, 1)',
                            ],
                            borderWidth: 0
                        }]
                },
                options: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    
                }
            });
        </script></p></center>
		
    </body>
</html>