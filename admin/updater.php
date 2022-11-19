<?php
include "../api/db_lib.php";




  function get_Bal($peer,$usr)
  {
      
      
      $busd = run_query_single("SELECT `value` FROM `usr_$usr` WHERE `property`='$peer"."_bal'");
  
      if($busd){
          return intval($busd['value']);
      }
      return 0;
      
  }

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
    $tx_id = $_POST['tx_id'];

    $peer = $_POST['peer'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];

    $r = null;
       //put the update here for the balance
    switch ($type) {
        case 'Deposit':
        $r = update_custom_userdata($peer."_bal",get_Bal($peer,$id)+$amount,id:$id);

            break;
        
        case 'Withdraw':
            # code...
            $r = update_custom_userdata($peer."_bal",get_Bal($peer,$id)-$amount,id:$id);
            break;
    }
    echo $r;
    
    if($r){
        print("Done");
    run_query("UPDATE `transaction` SET `approved`='2' WHERE `id`='$tx_id'");

     
    }else{
        print("Failed");
        
    }

}if($_POST['action']=='getout'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `transaction` SET `approved`='0' WHERE `id`='$id'");
    if($res){
        print("disapproved");
    }else{
        print("Error");
    }

}

//}


?>