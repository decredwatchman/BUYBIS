<?php   include("api/db_lib.php"); ?>
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
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        if(signin($username,$password)){
            //TODO redirect to dashboard
        }
    }
    ?>
        <form action="" method="POST">
            <h1 id="head">LOG IN</h1>
            <p>Welcome back!</p>
            <input type="text" placeholder="email/username" name="username" id="" required>
            <input type="password" placeholder="Password" name="password" id="" required>
            <button type="submit" name="login" class="signin">LOG IN</button>
            <a href="forget" class="forgot">Forggotten password?</a>
            <p class="account">Don't have an account? <a href="register"> Register</a></p>
        </form>
    </section>
</body>
</html>