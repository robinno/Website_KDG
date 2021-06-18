<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Test Website Van SanderN</title>

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

    <?php include "./Header.html"; ?>

    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h2>De Leiding</h2>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".gro">GroepsLeiding</li>
                        <li data-filter=".kap">Kapoenen</li>
                        <li data-filter=".wou">Wouters</li>
                        <li data-filter=".wol">Wolven</li>
                        <li data-filter=".joj">Jojo's</li>
                        <li data-filter=".giv">givers</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                      <!-- GroepsLeiding -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gro">
                          <div class="item">
                            <a href="assets/images/Leiding/Mathieu.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/Leiding/Mathieu.jpg" alt=""></a>
                          </div>
                        </div>
                      <!--Kapoenen-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all kap">
                          <div class="item">
                            <a href="assets/images/Leiding/Arthur.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/Leiding/Arthur.jpg" alt=""></a>
                          </div>
                        </div>
                      <!--Wouters-->
                      <!--  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all wou">

                      </div> -->
                      <!--Wolven-->
                      <!--  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all wol">

                      </div> -->
                      <!--Jojo's-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all joj">
                          <div class="item">
                            <a href="assets/images/Leiding/Robin.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="assets/images/Leiding/Robin.jpg" alt=""></a>
                          </div>
                        </div>
                      <!--Giver's-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all giv">

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

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
