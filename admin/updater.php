<?php
include "../api/db_lib.php";
if(!isset($_POST['action'])){
    echo "failed";
    exit;
}



if($_POST['action']=='updatecustom'){
    $property = $_POST['property'];
    $value = $_POST['value'];
    $res =run_query("UPDATE `gen_custom` SET `value`='$value'  WHERE `property`='$property'");
    if($res){
        print("Updated");
    }else{
        print("Not Updated");
    }

    


}//elseif(){

//}


?>