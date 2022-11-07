<?php

include("api/db_lib.php");


var_dump(get_core_userdata("username"));
//var_dump(get_custom_userdata());
//add_custom_userdata("Bal","500");
var_dump(update_custom_userdata("Bal","1000"));
?>