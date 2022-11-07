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
    <link rel="stylesheet" href="assets/css/exchange.css">
</head>

<body>
    <style>
        .nav-bar {
          padding: 10px;
          background-color: #007bff;
          color: white;
          
      }
      
      .nav-section {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 5px;
      }
      
      .logoo {
          font-size: 25px;
          font-weight: 600;
      }
      
      .con1 {
          display: flex;
      }
      
      .list {
          padding: 8px 15px;
          margin: 0px 10px;
          border-radius: 3px;
          background-color: white;
      }
      
      .items {
          text-decoration: none;
          font-size: 14px;
        font-weight:bold;
          text-decoration: none;
          font-weight: 500;
      }
      .menu-item{
        width: 25px;
        background-color: white;
        height: 3px;
        margin-top: 4px;
        margin-bottom: 4px;
      }
      .menu{
        display: none;
      }
      
      .section1 {
          padding: 20px;
    
      }
      
    @media screen and (max-width:800px){
      .list{
        display: none;
      }
      .menu{
        display: block;
      }
     
    }
      
      </style>
      <div class="nav-bar">
        <div class="nav-section">
              <div class="con1">
                    <span class="logoo">Buybis</span>
              </div>
              <div class="con1">
                <!-- <div class="list  yellow"><a href="#" class="items yellow">Deposit</a></div> -->
                <div class="list"><a href="index" class="items">HOME</a></div>
                <div class="list"><a href="exchange" class="items">TRADE</a></div>
                <div class="list"><a href="dashboard" class="items">WALLET</a></div>
                <div class="list"><a href="#" class="items">LOG OUT</a></div>
                    <div class="menu">
                      <div class="menu-item"></div>
                      <div class="menu-item"></div>
                      <div class="menu-item"></div>
                    </div>
              </div>
        </div>
    </div>

    <!-- moilenav -->
    <nav class="mynav">
        <span><a class="nav-links" href="index"><img height="30px" style="display: block; ;" src="assets/svg/home.svg"></i></a></span>
       <span><a class="nav-links" href="exchange"><img height="30px" style="display: block; ;" src="assets/svg/change.svg"></i></a></span>
       <span><a class="nav-links" href="dashboard"><img height="30px" style="display: block; ;" src="assets/svg/wallet.svg"></i></a></span>
    </nav>
    <!-- ends here -->
<section>
    <form action="">
       <div>
        <label for="">Amount of currenc</label>
        <input type="number" name="" id=""><button>currency</button>
       </div>
        <button class="swap"><i class="fa fa-refresh" aria-hidden="true"></i></button>
        <div>
            <label for="">Amount of currency</label>
            <input type="number" name="" id=""><button>currency</button>
           </div>
          
        <button>buy currency</button>
        
    </form>
</section>

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>