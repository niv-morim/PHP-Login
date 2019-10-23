<?php
if(!defined('_config_')){
    exit('you dont have a config file');
}


error_reporting(-1);
ini_set('display_error'. 'On');
//include the DB.php file:
include_once "classes/DB.php";
include_once "classes/Filter.php";


$con=DB::getConnection();

?>