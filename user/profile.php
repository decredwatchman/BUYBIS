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
<?php include('nav.php');
var_dump(get_core_userdata());
?>

                                <div class="col">
                                    <div class="card  mb-3">
                                        <div class="card-header py-3">
                                            <p class=" m-0 font-weight-bold">USER INFORMATION</p>
                                        </div>
                                        <div class="card-body">
                                        <h4 class="card-title" style="font-size: 18PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">USERNAME: USER</h4>
                                        <h4 class="card-title" style="font-size: 18PX;color: rgb(105,108,112);font-family: Aldrich, sans-serif;">REFFERALS: 3</h4>
                                        <div>
                                            <input type="text" value="buybis.com/register?id=1221" id="myInput" readonly>
                                            <button onclick="myFunction()"><img height="25px"src="assets/svg/copy.svg"></button>
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
  alert("Copied: " + copyText.value);
}
                                         </script>
                                        </div>

                                        </div>
</div>
                                     
                                        <div class="card mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold ">TRANSACTION</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Peer</th>
                                            <th>Method</th>
                                            <th>Amount</th>
                                            <th>date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                        <?php
                                        $id = get_userid();
                                        $res = run_query("SELECT * FROM `app_db`.`transaction` WHERE `user`='$id'");
                                        if($res){
  
                                        
                                        foreach($res as $i){
                                        $t = 'unknown';
                                        switch ($i['type']) {
                                            case 0:
                                                $t = "Deposit";
                                                break;
                                            case 1:
                                                $t = "Withdraw";
                                                # code...
                                                break;
                                            case 2:
                                                $t = "Trade";
                                                # code...
                                                break;
                                        }
                                        $s = "Unknown";
                                        switch ($i['approved']) {
                                            case 0:
                                                $s = "FAILED";
                                                break;
                                            case 1:
                                                $s = "PENDING";
                                                # code...
                                                break;
                                            case 2:
                                                $s = "APPROVED";
                                                # code...
                                                break;
                                        }
                                        ?>
                                        <tr>
                                            <td><img height="20px" src="./assets/svg/<?php echo $i['peer'] ?>.svg" alt="flag"><?php echo $i['peer'] ?></td>
                                            <td><?php echo $t ?></td>
                                            <td><?php echo $i['amount'] ?></td>
                                            <td><?php echo $i['date'] ?></td>
                                            <td><?php echo $s ?></td>
                                        </tr>
                                         <?php
                                        }}

                                        
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                                     <!-- DataTales Example -->
                
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>