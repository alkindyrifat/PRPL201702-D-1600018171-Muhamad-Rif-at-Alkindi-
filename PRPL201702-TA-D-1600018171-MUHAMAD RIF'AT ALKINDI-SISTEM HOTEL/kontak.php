<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    
    <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
        
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
    
    <!-- *********  Header  ********** -->
    
    <div id="header">
        <div id="header_in">
        
        <h1><a href="index.html"><b>THE</b> ANDROMEDA</a></h1>
        
        <div id="menu">
         <ul>
            <li><a href="beranda.html">Home</a></li>
            <li><a href="reservasi.php">Reservasi</a></li>
            <li><a href="info_kamar.php">Info Kamar</a></li>
            <li><a href="contact.php">Contact</a></li>   
        </div>
    </div>
    
    <!-- *********  Main part – headline ********** -->
    
        
        <div id="main_part_inner">
            <div id="main_part_inner_in">
        
            <h2>Contact</h2>
            
        
            </div>
            
        </div>
        
        
        <!-- *********  Content  ********** -->
        
        <div id="content_inner">
            
            <!-- *** contact form *** -->
            
           <h3>Leave a message</h3>
           
           <form action="#" method="post" class="formit">
                <input type="text" name="name" placeholder="YOUR NAME"/>
                <input type="text" name="email" placeholder="EMAIL"/>
                <input type="text" name="url" placeholder="WEBSITE (OPTIONAL)"/>
                <textarea size="20" name="message" placeholder="Leave your message here..."></textarea>
                <input type="submit" class="button_submit" value="SEND A MESSAGE">
            </form>

            <div class="cara"></div>
            
            <h3>Contact information</h3>
            
            <div class="contactinfo">
                <span class="ico_mapmark"><b>Jalan Parang Tritis No 15,Yogyakarta</b></span>    
            </div>
            
            <div class="contactinfo">
                <span class="ico_message"><b>theandromeda@gmail.com</b></span>    
            </div>
            
            <div class="contactinfo">
                <span class="ico_iphone"><b>(+022) 456 789 012</b></span>    
            </div>
            
            <hr class="cleanit">
            
            
            <div class="mapit">
                <iframe width="938" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1175.1406533671645!2d110.37844111873028!3d-7.82299480206717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5709a2383ba1%3A0x5027a76e356af70!2sSorosutan%2C+Umbulharjo%2C+Yogyakarta+City%2C+Special+Region+of+Yogyakarta!5e0!3m2!1sen!2sid!4v1526991342876"> 
                </iframe>
            </div>

            
            
            
            
            
        </div>
        
    
    
    <!-- *********  Footer  ********** -->
    
    <hr class="cleanit">
    
     <div id="footer">
        <div id="footer_in">
            
            <p><a href="theadnromeda@gmail.com">The Andromeda Hotel</a> &mdash; </p>
            <span>Author: <a href="muhamad1600018171@webmail.uad.ac.id">Alkindy Rifat</a></span>

        
        </div>
    </div>
         
<script>
// script for testimonial' tabs
$(function() {
    $("ul.controls").tabs("div.testimonials > div");
});
</script>

</body>
</html>
