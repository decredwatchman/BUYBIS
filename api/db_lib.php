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


// SOMETHING LIKE THIS

// echo $mymessage = '<div class="alert alert-primary alert-dismissible" role="alert">
// <button type="button" class="close" data-dismiss="alert" aria-label="close">
// <span aria-hidden="true">&times;</span></button>
// ALERT : WRONG USER DETAILS
// </div>';


function signup(string $username, string $password, string $email)
{
    global $conn, $allowed_methods;
    if(in_array($_SERVER['REQUEST_METHOD'], $allowed_methods)){
        if( isset($username,$password,$email) ){
            $username= $conn->escape_string($username);
            $password= password_hash($password,PASSWORD_DEFAULT);
           // var_dump($password);
            $email = $conn->escape_string($email);
            $exists_n = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$email'");
            $exists_e = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$email'");
            $session = uniqid("tkn_");
            if(!$exists_n && !$exists_e){
                $result = run_query("INSERT INTO `users` (`username`, `password`, `email`, `admin`, `banned`, `session`) VALUES ('$username','$password','$email','0','0','$session')");
            if($result){
                popup("Successfully Registered");
                return True;
            }else{
                popup("Not registered");
                print("INSERT INTO `users` (`username`, `password`, `email`, `admin`, `banned`, `session`) VALUES ('$username','$password','$email','0','0','$session')");
                exit;
                return false;
            }
            
            //echo("{result : 'User Added'}");
            
            

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
    global $conn, $allowed_methods;
    $username= $conn->escape_string($username);
    $pass = run_query("SELECT `password` FROM `users` WHERE `username`='$username' or `email`='$username' LIMIT 1");
    if($pass){
        $pass = $pass[0]['password'];
    }
    $usr = run_query("SELECT `id` FROM `users` WHERE `username`='$username' or `email`='$username' LIMIT 1");
    if($usr){
        $usr = $usr[0]['id'];
    }
    $correct = password_verify($password,$pass);///$pass[0]==hash( "sha256",$password);
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
    if (isset( $_SESSION["loggedin"]) && $_SESSION["last_loggedin"]< 1800*8){
        //last login 4hrs 
        //logout
        logout();
        return false;
    }else{
        return isset($_SESSION["loggedin"]);
    }

}
/*
* Logs out current user
*/
function logout(){
    if($_SESSION["loggedin"] && $_SESSION["_u_"]){
        $_SESSION["loggedin"] = null;
        $_SESSION["_u_"] = null;
    }
    session_unset();
    session_destroy();
    
}
/*
* gets userdata
*@param userdata
*/
function get_core_userdata(string $field=null){
    global $conn;
    $usr = get_userid();
    $res = null;
    $field = $conn->escape_string($field);
    if(isLoggedin()){
        if($field){
            $res = run_query("SELECT `$field` from `users` WHERE id='$usr'")[0];
        }else{
            $res = run_query("SELECT `username`,`email`,`admin`,`banned` from `users` WHERE id='$usr'")[0];
        }
        return $res;
    }
}
/**
 * get custom data
*/
function get_custom_userdata(string $field="init"){
    global $conn;
    $usr = get_userid();
    $res = null;
    $field = $conn->escape_string($field);
    if(isLoggedin()){
        $res = run_query("SELECT * from `app_db`.`usr_$usr` WHERE `property` = '$field'");
        if(!$res){
            return false;
        }
        return $res;
    }
    return false;
}


function add_custom_userdata(string $property,string $value){
    global $conn;
    $_id = $conn->escape_string(get_userid());
    $property = $conn->escape_string($property);
    $value = $conn->escape_string($value);
    //DESCRIBE `my_table`
    //CREATE TABLE `app_db`.`usr` ( `property` VARCHAR(50) NOT NULL , `value` VARCHAR(1024) NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , UNIQUE (`id`), UNIQUE (`property`)) ENGINE = InnoDB;
    if(run_query("SELECT * FROM app_db.`usr_$_id` WHERE 1 LIMIT 1")){
        echo"wello";
        $res = run_query("INSERT INTO `app_db`.`usr_$_id` (`property`, `value`) VALUES ('$property','$value')");
        if(!$res){
            popup("ERROR, Data Reg Failed");
        }else{
            return true;
        }
    }else{
        //table has not been created
        $res = run_query("CREATE TABLE `app_db`.`usr_$_id` ( `property` VARCHAR(50) NOT NULL , `value` VARCHAR(1024) NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , UNIQUE (`id`), UNIQUE (`property`),`date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP) ENGINE = InnoDB;");
        if($res){
            $res = run_query("INSERT INTO `app_db`.`usr_$_id` (`property`, `value`) VALUES ('init','_init_')");
            $res = run_query("INSERT INTO `app_db`.`usr_$_id` (`property`, `value`) VALUES ('$property','$value')");
            if(!$res){
                popup("ERROR, Data Reg Failed");
            }else{
                return true;
            }
        }else{
            popup("ERROR, Data Reg Failed");
        }
        //run_query("DROP TABLE `usr11",true);
        //add_userdata($property,$value);
    }

}   
/**
 * Updates Core userdata
 * id/admin not allowed
 */
function update_core_userdata(string $field ,$value , bool $notify=false,string $id= null){
    global $conn;
    $field = $conn->escape_string($field);
    $value = $conn->escape_string($value);

    $usr=get_userid();
    if($id){
        $usr=$id;
    }

    $restricted = ['id','admin',];
    if(in_array($field,$restricted)){
        popup("NOT ALLOWED!");
    }else{
        $res = run_query("UPDATE `users` SET `$field`='$value' where `id`='$usr'");
        if($res){
            return true;
        }else{
            return false;
        }
    }
    return false;
}
/**
 * Updates custom userdata
 * 
 */
function update_custom_userdata(string $field ,$value , bool $create=false, string $id= null){
    global $conn;
    $field = $conn->escape_string($field);
    $value = $conn->escape_string($value);
    $usr=get_userid();
    if($id){
        $usr=$id;
    }

    $restricted = ['id','admin',];
    if(in_array($field,$restricted)){
        popup("NOT ALLOWED!");
    }else{
        $res = run_query("UPDATE `app_db`.`usr_$usr` SET `value`='$value' where `property`='$field'");
        if($res){
            return true;
        }else{
            if(!$create){
                popup("Error!");
                return false;
            }
            
            return add_custom_userdata($field,$value);
        }
    }
    return false;
}


function create_server_session(){
    
}

function get_userid(){
    return $_SESSION["_u_"];
}

?>