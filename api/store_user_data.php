<?php
include "lib.php";
/*
@signup
@request    POST
@params     Property , Value
*/
$allowed_methods = ["POST"];
header('Content-Type: application/json; charset=utf-8');

if(in_array($_SERVER['REQUEST_METHOD'], $allowed_methods)){
    if( isset($_POST['username'],$_POST['password'],$_POST['email'])){
        $username= $conn->escape_string($_POST['username']);
        $password= $conn->escape_string($_POST['password']);
        $email = $conn->escape_string($_POST['email']);
        $result = run_query("INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username','$password','$email')"
        );
        echo("{result : 'User Added'}");
        
    }else{
        print("{result : false,reason: 'unset user data'}");
        http_response_code(400);
        //Username Password or email Not Set
    }
}else{
    print("{result : false, reason: 'Invalid Request Method'}");
    http_response_code(400);
    //popup("Only Post is allowed (params username, password, email)");
}




?>