<?php
if(!defined('_config_')){
    exit('you dont have a config file');
}

//include the DB.php file:
include_once "classes/DB.php";

$con=DB::getConnection();

?>