<?php include("../api/db_lib.php");
if(isset($_GET['logout'])){
    logout();
    header("Location:./index");
    
     }


// if(isLoggedin()){
//  header("Location:user/index");
//     }
     ?>
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
                <div class="list"><a href="?logout=1" class="items">LOG OUT</a></div>
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
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link active" href="#">MY ASSETS</a></li>
            </ul>
        </div>
        <div class="card-body " style="height: auto;width: 100%;">
            <h4 class="card-title" style="font-size: 18PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">WALLET OVERVIEW</h4>
            <h4 class="card-title" style="line-height: 41px;letter-spacing: 2px;filter: blur(0px) brightness(14%) contrast(59%) grayscale(12%) hue-rotate(41deg);">$ 0.0000345&nbsp;</h4>
            <h4 class="card-title" style="font-size: 12PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">REFERRAL COMMISSION</h4>
            <h4 class="card-title" style=" font-size: 15PX;line-height: 21px;letter-spacing: 2px;filter: blur(0px) brightness(14%) contrast(59%) grayscale(12%) hue-rotate(41deg);">$ 0.0000345&nbsp;</h4>
            
                
          <div class="card-title"><button class="btn bbt " type="button">Deposit</button><button class="btn bbt " type="button">Withdraw</button></div>
               
        
        </div>
    </div>
 <!-- DataTales Example -->

    
    <div class="card">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>TOKEN</th>
                        <th>AMOUNT</th>
                        
                    </tr>
                </thead>
          
                <tbody>
                    <tr>
                        <td><img height="30px" src="assets/svg/tether-441954.svg">USDT</td>
                        <td>$3070.00</td>
                        
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/busd.svg">BUSD</td>
                        <td>$3400.00</td>
                        
                    </tr>
                   
                    <tr>
                        <td><img height="30px" src="assets/svg/bitcoin-441959.svg">BTC</td>
                        <td>$300.00</td>
                        
                    </tr>
                     <tr>
                        <td><img height="30px" src="assets/svg/etherium-441953.svg">ETH</td>
                        <td>$200.00</td>
                 
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/dogecoin-441958.svg">DOGE</td>
                        <td>$200.00</td>
                 
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/dash-441957.svg">DASH</td>
                        <td>$3400.00</td>
                        
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/ripple-441950.svg">RIPPLE</td>
                        <td>$3090.00</td>
                        
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/litecoin-441956.svg">LTC</td>
                        <td>$300.00</td>
                        
                    </tr>
                     <tr>
                        <td><img height="30px" src="assets/svg/zcash-441948.svg">ZCASH</td>
                        <td>$200.00</td>
                 
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/tron.svg">TRX</td>
                        <td>$200.00</td>
                 
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/eos.svg">EOS</td>
                        <td>$3400.00</td>
                        
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/xrp.svg">XRP</td>
                        <td>$3090.00</td>
                        
                    </tr>
                   


                </tbody>
            </table>
        </div>
    </div>

<!-- 
    
    <div class="form-group row pad">
        <label class="col-sm-2 col-form-label">Referral Link</label>
        <div class="col-sm-8">
                <input type="text" class="form-control" id="myInput" value="link" readonly>
            </div>
         <button class="btn btn-secondary bg-gradient-primary btn-sm mar" onclick="myFunction()" onmouseout="outFunc()" >Copy Link</button>    
         
      </div>
  
  <br>
  <h5 class="pad"><center><code>
  15 % affiliate commision on every deposit made from your referral.
  </code></center></h5> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>