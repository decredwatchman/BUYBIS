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
            return True;

            }else if ($exists_e){
             popup("user email Already Registered");
             return false;

            }else if ($exists_n){
                popup("username Already Registered");
                return false;
   
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
    echo $_SESSION["_u_"]."<br>";
    global $conn, $allowed_methods;
    $username= $conn->escape_string($username);
    $pass = run_query("SELECT `password` FROM `users` WHERE `username`='$username' or `email`='$username' LIMIT 1");
    $usr = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$username' LIMIT 1")[0]['id'];

    $correct = password_verify($password,$pass[0]["password"]);///$pass[0]==hash( "sha256",$password);
    if($pass && $correct){
        popup("Loggedin");
        $_SESSION["loggedin"] = true;
        $_SESSION["last_loggedin"] = time();
        $_SESSION["_u_"] = $usr;
        return true;
        
    }else{
        popup("Invalid information");
        return false;

    }
    

}

/*
* Checks if user is loggedin
*@return bool
*/
function isLoggedin(){
    if( $_SESSION["loggedin"] && $_SESSION["last_loggedin"]< 1800*8){
        //last login 4hrs 
        //logout
        logout();
        return false;
    }else{
        return true;
    }

}
/*
* Logs out current user
*/
function logout(){
    session_unset();
    session_destroy();
}
/*
* gets userdata
*@param userdata
*/
function get_userdata(bool $custom=false,string $field=null){
    $usr = $_SESSION['_u_'];
    $res = null;
    if(isLoggedin()){
    if($custom){
        return 0;
    }else{
        if($field){
            $res = run_query("SELECT `$field` from `users` WHERE id='$usr'")[0][$field];
        }else{
            $res = run_query("SELECT `username`,`email`,`admin`,`banned` from `users` WHERE id='$usr'")[0];

        }
        return $res;
    }}
}

function add_userdata(){
    
}

function update_userdata(string $field ,$value , bool $notify=false){
    $restricted = ['id','admin',];
    if(in_array($field,$restricted)){

    }else{
        $res = run_query("UPDATE `users` SET `id`='$'");
        if($res){
            return true;
        }else{
            return false;
        }
    }
    return false;
}


?>