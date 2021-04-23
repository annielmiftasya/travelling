<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $art = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Detail Artikel | Travelling Artikel</title>
    <script
      src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
      data-auto-a11y="true"
    ></script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        

        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <link rel="stylesheet" href="css1/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css1/fontAwesome.css">
        <link rel="stylesheet" href="css1/hero-slider.css">
        <link rel="stylesheet" href="css1/owl-carousel.css">
        <link rel="stylesheet" href="css1/datepicker.css">
        <link rel="stylesheet" href="css1/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>


    <section class="events" id="events-section">
        <div class="content-wrapper">
            <div class="inner-container container-fluid">
                <div class="row">
                
                   <div class="col-md-10 col-sm-12 col-md-offset-1">
                        <div class="projects-holder">
                            <div class="event-list">
                            <div style="padding-top:10px; text-align:center;">
                                <?php
                                echo"<a href='edit.php?id=".$art->_id."'>
                                    <button type='button' class='btn  btn-primary'><i class='fas fa-pencil-alt'></i></button>
                                </a>   
                                <a href='hapus.php?id=".$art->_id."'>       
                                    <button type='button' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button>
                                </a>
                                "?>
                            </div>
                                <h1 class="tm-text font-weight-bold" style="text-align:center; font-size:20px; padding-top: 15px;"><?php echo "$art->judul"; ?></h1>
                                <p class="tm-text" style="font-size:16px; padding-bottom: 35px; padding-top: 25px;padding-left:70px;padding-right:70px"><?php echo "$art->subjek"; ?></p>
                                
                            <div class="white-button">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() 
	{
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>