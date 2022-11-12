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
        print("NotUpdated");
    }

    


}if($_POST['action']=='approveT'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `transaction` SET `approved`='2' WHERE `id`='$id'");
    if($res){
        print("Approved");
    }else{
        print("Disapproved");
    }

}

//}


?>