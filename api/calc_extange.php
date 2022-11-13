<?php
include "db_lib.php";




function getExtange(string $peer, int $amount)
{
    global $conn;
    $peer = $conn->escape_string($peer);
    $amount = $conn->escape_string($amount);
    $ext = run_query_single("SELECT `value` FROM `gen_custom` WHERE `property`='$peer'")['value'];
    if($ext){
        return $amount*$ext;
    }else{
        return "0...";
 
    }
    # code...
}


if(isset($_POST['action'])){
    //TODO Js response

    if($_POST['action']=='ext'){
        if(isset($_POST['amount'],$_POST['peer'])){
           if($_POST['amount']==""){
            echo 0;
            exit;
           }
            $peer = $_POST['peer'];
            $amount = $_POST['amount'];
            echo getExtange($peer, $amount);
        }else{
            echo '0...';
        }
    }
}





?>




