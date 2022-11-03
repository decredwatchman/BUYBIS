<?php
include "lib.php";
/*
@signup
@request    POST
@params     username, password, email
*/
$allowed_methods = ["POST"];

if(in_array($_SERVER['REQUEST_METHOD'], $allowed_methods)){
    if( isset($_POST['username'],$_POST['password'],$_POST['email'])){
        
    }else{
    popup("Username Password or email Not Set");
    }
}else{
    popup("Only Post is allowed (params username, password, email)");
}




?>