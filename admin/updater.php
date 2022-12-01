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

    $res =run_query("UPDATE `transaction` SET `approved`='2' WHERE `id`='$id'");
    if($res){
        print("approved");
    }else{
        print("Error");
    }
    

}if($_POST['action']=='getout'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `transaction` SET `approved`='0' WHERE `id`='$id'");
    if($res){
        print("disapproved");
    }else{
        print("Error");
    }

}if($_POST['action']=='disconfirm'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `user` SET `banned`='1' WHERE `id`='$id'");
    if($res){
        print("approved");
    }else{
        print("Error");
    }
}if($_POST['action']=='confirm'){
    $id = $_POST['id'];

    $res =run_query("UPDATE `user` SET `banned`='1' WHERE `id`='$id'");
    if($res){
        print("approved");
    }else{
        print("Error");
    }
}

//}


?>