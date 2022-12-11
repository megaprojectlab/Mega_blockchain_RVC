<?php

    include_once "db_setting.php";
    $db_conn = new Db_conn();

    $db = $db_conn->loadData('DB')->builder();
	
?>
