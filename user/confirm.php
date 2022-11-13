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
p{
    text-align:center;
    width:auto;
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
  width: auto;
  padding: 10px;
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
<?php include('nav.php');

if(isset($_POST['pay'])){
    $amt = $_POST['amount'];
    $per = $_POST['peer'];
}else{
  
}
// Deposit 0 : Withd
if(isset($_POST['Deposit'])){
  $amount = $_POST['amount'];
  $email = $_POST['email']; 
  $peer = $_POST['peer']; 
  $method = $_POST['method']; 
  $dates = $_POST['dates']; 
  $wallet = $_POST['wallet'];
 echo $amount;
 if(AddTransaction($method,$amount,$peer,$wallet)){
  //there is an error withnthwe location
  header('Location:profile');
 }
 }   
  
 $peer = $_POST['peer']; 
$pay_wallet =  run_query_single("SELECT `value` FROM `gen_custom` WHERE `property`='$peer'")['value'];

?>

<section>
<div class="wrapper">
      <header>DEPOSIT</header>
      <br><br>
      <form action="" method="POST">
        <p>Deposit $<?php echo $amt ?> of <?php echo $per ?> into the below wallet Address </p>
        <br><br> 
        <span><?php echo $pay_wallet ?></span>
        <br><br>
        <p class="text-danger">please confirm the address </p><br>
  
                                        
          <input type="hidden" name="amount" value="<?php echo $amt ?>" required>
          <input type="hidden" value="0" name="method">
          <input type="hidden" value="email" name="email">
          <input type="hidden" value="dates" name="dates">
          <input type="hidden" value="N/A" name="wallet">          
          <input type="hidden" value="<?php echo $per ?>" name="peer">
          



          <input type="text" value="<?php echo $pay_wallet ?>" id="myInput" readonly>
                                            <p onclick="myFunction()"><img height="25px"src="assets/svg/copy.svg"></p>
                                         <script>
                                            function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  console.log('coppied')
}
                                         </script>
         
       
       
  <br><br>
        <button  name="Deposit">DEPOSIT</button>
      </form>
    </div>
    </section>
<!-- 
<script>
  function deposit(){
    let amount = $('#amount').val()
    let Depositthod = $('#method').val()
    let email = $('#email').val()
    let dates = $('#dates').val()
    let wallet = $('#wallet').val()
    let pair = $('#pair').val()


    $.ajax({
      url:"api/deposit.php",
      type:'post',  
      data:JSON.stringify({
          amount:amount,
          method:method,
          email:email,
          dates:dates,
          wallet:wallet,
          pair:pair,
      }),
      success:function (data,status){
        console.log(data);
      }
    })
  }
</script> -->

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>