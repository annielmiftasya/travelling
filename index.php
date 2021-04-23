<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Travel The World</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap1.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->
<body>

    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Back to Top</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#konten"><span>Artikel</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Tulis Artikel</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
            <?php
				if (isset($_SESSION['success'])) {
					echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
				}
			?>
        <div class="container">
            <div class="first-content">
                <h1>Travel</h1>
                <span><em>The World</em></span>
                <div class="primary-button">
                    <a href="#konten">Lihat Artikel</a>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-content projects-content" id="konten">
        <div class="container">
            <h1 style="color: #ffffff; text-align: center; font-size:50px;">Artikel Terkait</h1>
            
        
        <!--DATA MONGODB-->
        <section id='gallery' style="padding-bottom:30px">
            <div class='container'>
            <div class='row'>
            <?php
                require 'config.php';
                $artikel = $collection->find();
                foreach ($artikel as $art) {
            echo"<div class='col-lg-4 mb-4'>
            <div class='card'>
            <img src='img/artikel.jpg' alt='' class='card-img-top'>
            <div class='card-body'>
                <h3 class='card-title'  style='font-family:varta;padding-left:10px; padding-right:10px;padding-top:20px'>$art->judul</h3>
                <div style='padding:10px 10px 10px 10px;'>
                <CENTER> 
                <a href='detail.php?id=".$art->_id."'>
                <button type='button' class='btn btn-primary  btn-lg' >Lihat Artikel
                </button>
                </a>
                </CENTER>
                </div>
                </div>
            </div>
            </div>";
            }
            ?>
            </div>
        </div>
        </section>
        <!--DATA MONGODB-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="primary-button">
                <h6 style="color: #ffffff; text-align: center; font-size:50px; padding-bottom:15px"><small>Yuk Tulis artikelmu disini!</small></h6>
                    <a href="insert.php">Tulis Artikel</a>
                </div>
                </div>
            </div>
        </div>
        <p style="font-size:15px;">Copyright &copy; 2019 Travel The World 
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>

</body>
</html>