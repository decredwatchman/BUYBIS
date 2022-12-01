  <?php
  include("../api/db_lib.php");
  if(isset($_GET['logout'])){
    logout();
    header("Location:../index");
    
     };


if(!isLoggedin()){
 header("Location:../index");
    }
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BUYBIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
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
    <link rel="stylesheet" href="style.css">
</head>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
   <!-- <style>
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
      .log{
        text-decoration: none;
          font-size: 14px;
        font-weight:bold;
          text-decoration: none;
          font-weight: 500;
      }
      
      .items {
          text-decoration: none;
          font-size: 14px;
        font-weight:bold;
          text-decoration: none;
          font-weight: 500;
      }
      .list:hover{
        background-color:#F9F6EE;
        color: rgb(30, 164, 213);
      }
      a:hover{
        text-decoration:none;
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
      .con2{
        display:none;
      }
      
    @media screen and (max-width:800px){
      .list{
        display: none;

      }
      .tt{
        padding: 5px 8px;
          margin: 0px 10px;
          border-radius: 3px;
          background-color: white;
      }
      .tt:hover{
        background-color:#F9F6EE;
        color: rgb(30, 164, 213);
      }
   
      .con2 {
          display: flex;
          flex-direction:column;
          position: absolute;
          margin-top:50px;
          right:30px;
          width:100%;
          padding-left:20px;
          left:2;
      }
      .menu{
        display: block;
      }
     
    }
      
      </style>
      <div class="nav-bar">
        <div class="nav-section">
              <div class="con1">
                    <span class="logoo" style="color:white; font-family:Arial Black;">Buybis</span>
              </div>
              <div class="con1">   
                
                 <div class="tt"><a href="?logout=1" class="ltems" >LOG OUT</a></div>
                    
                
                    <div class="list"><a href="index" class="items">HOME</a></div>
                <div class="list"><a href="exchange" class="items">TRADE</a></div>
                <div class="list"><a href="dashboard" class="items">WALLET</a></div>
                <div class="list"><a href="profile" class="items">PROFILE</a></div>
                <div class="list"><a href="?logout=1" class="items"  >LOG OUT</a></div>
               //<div class="list  yellow"><a href="#" class="items yellow">Deposit</a></div> //
              

              </div>
        </div>
    </div> -->



    <style>
        nav {
            font-family: sans-serif;
        }
        

        .body_ {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light text-white p-2" style="background-color: #880ce7;">
        <div class="container  text-white fs-14 ">
            <a class="navbar-brand  text-white" href="#">
                <!-- <img style="background-color: #210c34;" src="./images/logo_.png" alt='hi' /> -->
                BuyBis
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">Buy With NGNR</a>
                    </li>
                    <li class="nav-item dropdown text-white">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Trade
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Swap</a></li>
                            <li><a class="dropdown-item" href="#">Swing</a></li>
                            <li><a class="dropdown-item" href="#"> P2P Trading</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown text-white">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Earn
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Swapman</a></li>
                            <li><a class="dropdown-item" href="#">Swing</a></li>
                            <li><a class="dropdown-item" href="#"> P2P Trading</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown text-white">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Forum
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Swapman</a></li>
                            <li><a class="dropdown-item" href="#">Swing</a></li>
                            <li><a class="dropdown-item" href="#"> P2P Trading</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">BENEC</a>
                    </li>
                </ul>

            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="flex-grow: 0;">
                <ul class="navbar-nav text-white">
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="login">Login / Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">
                            <svg viewBox="0 0 24 24" width="24" height="15" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="#">
                            <svg viewBox="0 0 24 24" width="24" height="15" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- moilenav -->
    <nav class="mynav">
        <span><a class="nav-links" href="index"><img height="30px" style="display: block; color:white;" src="assets/svg/home.svg"></i></a></span>
       <span><a class="nav-links" href="exchange"><img height="30px" style="display: block; ;" src="assets/svg/swap.svg"></i></a></span>
       <span><a class="nav-links" href="dashboard"><img height="30px" style="display: block; ;" src="assets/svg/wallet.svg"></i></a></span>
       <span><a class="nav-links" href="profile"><img height="30px" style="display: block; ;" src="assets/svg/user.svg"></i></a></span>
    </nav>
    <!-- ends here -->