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
       if(signup($username,$password,$email)) {
        signin($username,$password);
        if(add_custom_userdata("usdt_bal","0.00")&&add_custom_userdata("busd_bal","0.00")&&
        add_custom_userdata("ref_bal","0.00")&&add_custom_userdata("over_bal","0.00")){
        header("Location:user/dasboard");
    }
       }
    }
    ?>
        <form action="" method="POST">
            <h1 id="head">CREATE ACCOUNT</h1>
            <p>Manage your Buybis</p>
            <input type="text" placeholder="username" name="username" id="" required>
            <input type="email" placeholder="Email address" name="email" id="" required>
            <input type="password" placeholder="Password" name="password" id="" required>
            <input type="password" placeholder="confirm Password" name="" id="" required>
            <button type="submit" name="register" class="signin">CREATE ACCOUNT</button>
            <p class="account">Already have an account? <a href="login"> Login</a></p>
        </form>
    </section>
</body>
</html>