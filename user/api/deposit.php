<?php
include("connect.php");
if(isset($_POST['me'])){
  $amount = $_POST['amount'];
  $email = $_POST['email']; 
  $peer = $_POST['peer']; 
  $method = $_POST['method']; 
  $dates = $_POST['dates']; 
   $wallet = $_POST['wallet'];
 echo $amount;
 $insert = "INSERT INTO transaction (amount, method, email, wallet, peer, date) VALUES ('$amount','$method','$email','$wallet','$peer','$dates')";
   $result = mysqli_query($conn,$insert); 
 }   

?>

<section>
<div class="wrapper">
      <header>DEPOSIT</header>
      <br><br>
      <form action="" method="POST">
        <div class="amount">
        <p>Amount of :</p>
          <input type="number" name="amount" required>
          <input type="hidden" value="deposit" name="method">
          <input type="hidden" value="email" name="email">
          <input type="hidden" value="dates" name="dates">
          <input type="hidden" value="wallet" name="wallet">
          <input type="hidden" value="peer" name="peer">
          <div class="from">
            <div class="select-box">
              <img src="./assets/svg/busd.svg" alt="flag">
              <select name="peer"> <!-- Options tag are inserted from JavaScript --> </select>
            </div>
          </div>
        </div>
       
  <br><br>
        <button  name="me">DEPOSIT</button>
      </form>