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
    $peer = $_POST['peer'];
    $amount = $_POST['amount'];

    $res =run_query("UPDATE `transaction` SET `approved`='2' WHERE `id`='$id'");
       //put the update here for the balance
       $rest =run_query("UPDATE `usr_.$id` SET `$peer._bal`='$amount'");
    if($res && $rest){
        print("Approved");
     
    }else{
        print("Disapproved");
    }

}if($_POST['action']=='getout'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `transaction` SET `approved`='0' WHERE `id`='$id'");
    if($res){
        print("disapproved");
    }else{
        print("getat");
    }

}

//}


?>