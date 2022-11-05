<?php
include "lib.php";
session_start();
/*
@signup
@request    POST
@params     Property , Value
*/
$allowed_methods = ["POST","GET"];
//header('Content-Type: application/json; charset=utf-8');
function signup(string $username, string $password, string $email)
{
    global $conn, $allowed_methods;
    if(in_array($_SERVER['REQUEST_METHOD'], $allowed_methods)){
        if( isset($username,$password,$email) ){
            $username= $conn->escape_string($username);
            $password= password_hash($password,PASSWORD_DEFAULT);
            var_dump($password);
            $email = $conn->escape_string($email);
            $exists_n = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$email'");
            $exists_e = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$email'");
            
            if(!$exists_n && !$exists_e){
            $result = run_query("INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username','$password','$email')"
            );
            //echo("{result : 'User Added'}");
            popup("Successfully Registered");

            }else if ($exists_e){
             popup("user email Already Registered");

            }else if ($exists_n){
                popup("username Already Registered");
   
            }
        }else{
            print("{result : false,reason: 'unset user data'}");
            //http_response_code(400);
            //Username Password or email Not Set
        }
    }else{
        //print("{result : false, reason: 'Invalid Request Method'}");
        //http_response_code(400);
        //popup("Only Post is allowed (params username, password, email)");
        popup("Error 1");
    }
}

function signin(string $username, string $password){
    //password_verify()
    global $conn, $allowed_methods;
    $username= $conn->escape_string($username);
    $pass = run_query("SELECT `password` FROM `users` WHERE `username`='$username' or `email`='$username' LIMIT 1");

    $correct = password_verify($password,$pass[0]["password"]);///$pass[0]==hash( "sha256",$password);
    if($pass && $correct){
        popup("Loggedin");
        $_SESSION["loggedin"] = true;
        $_SESSION["last_loggedin"] = time();

        
        

        
    }else{
        popup("Invalid information");
    }
    

}

function isLoggedin(){
    if( $_SESSION["loggedin"] && $_SESSION["last_loggedin"]< 1800*8){
        //last login 4hrs 
        //logout
    }
}

function loguot(){
    
}
function get_userdata(){

}

function add_userdata(){
    
}

function update_userdata(){
    
}


?>