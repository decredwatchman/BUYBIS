<?php

include("api/db_lib.php");


var_dump(get_core_userdata("username"));
//var_dump(get_custom_userdata());
var_dump(update_custom_userdata("nanii","fuckk",create:true));
?>