<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Scouts Karel de Goede</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>

      <?php
        include './Header.html';
      ?>

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
          <div class="section-heading">
              <h2>Kalenders</h2>
          </div>
          <p>Op deze pagina zijn de kalenders terug te vinden. Op de kalender vind je o.a. de volgende info:
            <ul>
            <li> <a>Waar en wanneer er vergadering is; </a></li>
            <li> <a>Hoe laat je aanwezig moet zijn;</a></li>
            <li> <a>Een beschrijving van de vergadering;</a></li>
            <li> <a>Wanneer je terug naar huis mag vertrekken;</a></li>
            <li> <a>De contactgegevens van de leiding;</a></li>
            <li> <a>De algemene regels in scouts verband.</a></li>
          </ul>
          </p>
          <br>
            <ul>
              <li> <strong> Kapoenen </strong> </li>
            </ul>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <?php
        include './Footer.html';
      ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
