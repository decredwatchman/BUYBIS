<?php

include("api/db_lib.php");
// add 100 fake users
//AddTransaction(1,200,"333ee:ews");
//var_dump(get_all_users(1));
//var_dump(get_userdata_by_id(55));
//add_custom_userdata("aaa","aaaa");
#var_dump(run_query("SHOW TABLES LIKE 'usr_142'"))
//logout();
// var_dump(get_core_userdata("username"));
// //var_dump(get_custom_userdata());
// //add_custom_userdata("Bal","500");
var_dump(update_custom_userdata("busd_bal","1000"));
?>