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


function get_usdt_Bal()
{
    $usr = get_userid();
    
    $usdt = run_query_single("SELECT `value` FROM `usr_$usr` WHERE `property`='usdt'");

    if($usdt){
        return $usdt['value'];
    }
    return 0;
    
}
function get_busd_Bal()
{
    $usr = get_userid();
    
    $busd = run_query_single("SELECT `value` FROM `usr_$usr` WHERE `property`='busd'");

    if($busd){
        return $busd['value'];
    }
    return 0;
    
}




if(isset($_POST['action'])){
    //TODO Js response

    if($_POST['action']=='ext'){
        if(isset($_POST['amount'],$_POST['peer'])){
            $peer = $_POST['peer'];
            $amount = $_POST['amount'];
            echo getExtange($peer, $amount);
        }else{
            echo '0...';
        }
    }
    if($_POST['action']=='busd'){
        get_busd_Bal();
    }
    if($_POST['action']=='usdt'){
        get_usdt_Bal();
    }
    // action = bal_enough, from busd/usdt, amount
    if($_POST['action']=='bal_enough'){
        if(isset($_POST['from'],$_POST['amount'])){
            if($_POST['from']=='busd/usdt' ){
                echo get_busd_Bal()>=$_POST['amount'];
            }else{
                echo get_usdt_Bal()>=$_POST['amount'];
            }

        }
    }
}





?>




