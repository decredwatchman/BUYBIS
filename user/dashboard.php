
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
<?php include('nav.php');


$over = get_custom_userdata("over_bal");
$ref_bal = get_custom_userdata("ref_bal");
$usdt_bal = get_custom_userdata("usdt_bal");
$busd_bal = get_custom_userdata("busd_bal");
if($over){
    $over = $over[0]['value'];
    $ref_bal = $ref_bal[0]['value'];
    $usdt_bal = $usdt_bal[0]['value'];
    $busd_bal = $busd_bal[0]['value'];
}else{
    $over =0;
    $ref_bal = 0;
    $usdt_bal = 0;
    $busd_bal = 0;
}
?>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a class="nav-link active" href="#">MY ASSETS</a></li>
            </ul>
        </div>
        <div class="card-body " style="height: auto;width: 100%;">
            <h4 class="card-title" style="font-size: 18PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">WALLET OVERVIEW</h4>
            <h4 class="card-title" style="line-height: 41px;letter-spacing: 2px;filter: blur(0px) brightness(14%) contrast(59%) grayscale(12%) hue-rotate(41deg);">$ <?php echo $over; ?>&nbsp;</h4>
            <h4 class="card-title" style="font-size: 12PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">REFERRAL COMMISSION</h4>
            <h4 class="card-title" style=" font-size: 15PX;line-height: 21px;letter-spacing: 2px;filter: blur(0px) brightness(14%) contrast(59%) grayscale(12%) hue-rotate(41deg);">$ <?php echo $ref_bal; ?>&nbsp;</h4>
            
                
          <div class="card-title"><a class="btn bbt" href="deposit" type="color:white;" >Deposit</a><a class="btn bbt" href="withdraw" type="color:white;">Witdraw</a></div>
               
        
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
                        <td>$ <?php echo $usdt_bal; ?></td>
                        
                    </tr>
                    <tr>
                        <td><img height="30px" src="assets/svg/busd.svg">BUSD</td>
                        <td>$ <?php echo $busd_bal; ?></td>
                        
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