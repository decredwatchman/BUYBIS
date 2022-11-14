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
        /* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
 
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


section{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 80vh;
  padding: 0 10px;
  /* background: ; */
}
::selection{
  color: #fff;
  background: #675AFE;
}
.wrapper{
  width: 370px;
  padding: 30px;
  border-radius: 7px;
  background: #fff;
  box-shadow: 7px 7px 20px rgba(0, 0, 0, 0.05);
}
.wrapper header{
  font-size: 28px;
  font-weight: 500;
  text-align: center;
}

form :where(input, select, button){
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: none;
}
form p{
  font-size: 18px;
  margin-bottom: 5px;
}
form input{
  height: 50px;
  font-size: 17px;
  padding: 0 15px;
  border: 1px solid #999;
}
form input:focus{
  padding: 0 14px;
  border: 2px solid #675AFE;
}
form .drop-list{
  display: flex;
  margin-top: 20px;
  align-items: center;
  justify-content: space-between;
}
.drop-list .select-box{
  display: flex;
  width: 115px;
  height: 45px;
  align-items: center;
  border-radius: 5px;
  justify-content: center;
  border: 1px solid #999;
}
.select-box img{
  max-width: 21px;
}
.select-box select{
  width: auto;
  font-size: 16px;
  background: none;
  margin: 0 -5px 0 5px;
}
.select-box select::-webkit-scrollbar{
  width: 8px;
}
.select-box select::-webkit-scrollbar-track{
  background: #fff;
}
.select-box select::-webkit-scrollbar-thumb{
  background: #888;
  border-radius: 8px;
  border-right: 2px solid #ffffff;
}
.drop-list .icon{
  cursor: pointer;
  margin-top: 30px;
  font-size: 22px;
}
form .exchange-rate{
  font-size: 17px;
  margin: 20px 0 30px;
}
form button{
  height: 52px;
  color: #fff;
  font-size: 17px;
  cursor: pointer;
  background: #007bff;
  transition: 0.3s ease;
}
form button:hover{
  background: #4534fe;
}
    </style>
<?php include('nav.php')?>
<section>
<div class="wrapper">
      <header>SWAP</header>
  <?php
  function get_usdt_Bal()
  {
      $usr = get_userid();
      
      $usdt = run_query_single("SELECT `value` FROM `usr_$usr` WHERE `property`='usdt'");
  
      if($usdt){
          return $usdt['value'];
      }
      return 0;
      
  }
  function get_busd_Bal()
  {
      $usr = get_userid();
      
      $busd = run_query_single("SELECT `value` FROM `usr_$usr` WHERE `property`='busd'");
  
      if($busd){
          return $busd['value'];
      }
      return 0;
      
  }
  function update_bal(){

  }
  if(isset($_POST['from'],$_POST['peer'])){
    if($_POST['peer']=="busd/usdt"){
      if(get_busd_Bal()>=$_POST['from']){
        // to do Update Balance
        $res = update_custom_userdata("",100);
        $res = run_query("");
        if(true){
          popup("Extanged");
        }
      }else{
        popup("Not Enough Balance");
      }
    }else{
      if(get_usdt_Bal()>=$_POST['from']){
        // to do Update Balance
        $res = update_custom_userdata("",100);

        if(true){
          popup("Extanged");
        }
      }else{
        popup("Not Enough Balance");
      }
    }
  }

  ?>


      <form action="">
        <div class="amount">
        <p>Amount of :</p>
          <input type="number" value="1" name="from" onkeyup="update_ext()" id="in">
          <div class="from">
            <div class="select-box">
              <img src="./assets/svg/busd.svg" alt="flag">
              <select name="peer" id="peer"onkeyup="update_ext()"> <!-- Options tag are inserted from JavaScript --> </select>
            </div>
          </div>
        </div>
       
          <div class="icon"><img src="assets/svg/trade.svg" alt=""></div>
       
       
          <div class="amount">
       
          <input type="text" value="0" readonly id="aaa">
         
        </div>

        <div class="exchange-rate">Getting exchange rate...</div>
        <button>TRADE</button>
      </form>
    </div>
    </section>
    <script>
      function bal_enough(peer){
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", "cal_extange.php", false ); 
    xmlHttp.onload = function() {
        alert(this.responseText)  
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xmlHttp.send();
    xmlHttp.send("action=bal_enough);
    window.location.reload();  
    
}
    </script>
    <script src="assets/js/trade/country-list.js"></script>
    <script src="assets/js/trade/script.js"></script>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="../api/update.js">
    </script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>