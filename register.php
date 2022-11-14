<?php include("api/db_lib.php");
if(isLoggedin()){
 header("Location:user/index");
    }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUYBIS</title>
    <link rel="stylesheet" href="assets/css/register&login.css">
</head>
<body>
<section>
    <?php
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        ///there is an error here when no referral
        $my_ref = $_POST['ref'];
       if(signup($username,$password,$email)) {
        signin($username,$password);
        add_custom_userdata("usdt_bal","0.00",true);
        sleep(.3);
        add_custom_userdata("busd_bal","0.00");
        sleep(.3);
        add_custom_userdata("my_ref","$my_ref");
        sleep(.3);
        // update_custom_userdata("ref_".get_userid(),"1",true,id:$my_ref);
        // sleep(.3);
        add_custom_userdata("ref_bal","0.00");
        sleep(.3);
        add_custom_userdata("over_bal","0.00");
        sleep(.3);
        //throw maSSIVE ERROOR
         runquery("INSERT INTO `usr_$my_ref`(`property`, `value`) VALUES ('ref_".get_userid()."','".get_userid()."')");
        header("Location:user/dashboard");
       }
    }
    ?>
        <form action="" method="POST">
            <h1 id="head">CREATE ACCOUNT</h1>
            <p>Manage your Buybis</p>
            <input type="text" placeholder="username" name="username" id="" required>
            <input type="email" placeholder="Email address" name="email" id="" required>
        
            <input type="password" placeholder="Password" name="password" id="pass" required>
            <span id="wrong_pass_alert"></span>

            <input type="password" placeholder="confirm Password" name="" id="confirm_pass"  onkeyup="validate_password()" required>
            

<?php 
if(isset($_GET['id'])){
$ref = $_GET['id'];
 echo '<input type="hidden" name="ref" value="'.$ref.'" >';
}
?>


            <button type="submit" id="create" name="register" class="signin">CREATE ACCOUNT</button>
            <p class="account">Already have an account? <a href="login"> Login</a></p>
        </form>
    </section>
    <script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
 
        // function wrong_pass_alert() {
        //     if (document.getElementById('pass').value != "" &&
        //         document.getElementById('confirm_pass').value != "") {
        //         alert("Your response is submitted");
        //     } else {
        //         alert("Please fill all the fields");
        //     }
        // }
    </script>
</body>
</html>