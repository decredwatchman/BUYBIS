<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BUYBIS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include('nav.php')?>
<!-- ends here -->
    <!-- ends here -->
    <!-- <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"><div class="swiper-slide" style="background-image:url(assets/img/S2.JPG);"></div><div class="swiper-slide" style="background-image:url('assets/img/TRAD.jpeg');"></div><div class="swiper-slide" style="background-image:url('assets/img/security.jpg');"></div></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/s2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/s2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/s2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
          <span class="sr-only">Next</span>
        </a>
      </div>

    <div class="highlight-clean" style="padding-top: 30px;padding-bottom: 20px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">TRENDING</h2>
            </div>
            <div class="buttons"></div>
        </div>
    </div><div class="col">

    <coingecko-coin-list-widget 
     coin-ids="bitcoin,eos,ethereum,litecoin,ripple,usd,usdtez,tether,dogecoin"
      currency="usd" locale="en" width="100%">

    </coingecko-coin-list-widget>
    

<script src="https://widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
</div>
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters"><div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:url('assets/img/s2.jpg');"><span></span></div>

                <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                    <h2>Our commitment to your security</h2>
                    <p class="lead mb-0">We always regard your security as our top priority. Our security team is constantly dedicated to refining and developing stringent state-of-the-art security measures. We are committed to safeguarding the security of our users and trading
                        infrastructure.<br><br></p>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>