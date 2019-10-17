<?php
if(!defined('_config_')){
    exit('you dont have a config file');
}
class DB {

    protected static $con;
    
    // $charset="utf8_general_ci";
    // $servername = "localhost";
    // $myDB="login_system"
    // $username = "root";
    // $password = "";

private function __construct() {

    try {
        $conn = new PDO("mysql:charset=utf8;host=localhost;dbname=login_system", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    }

public static function getConnection(){
    if(!self::$con)
    {
        new DB();
    }
    return self::$con;
}
}
?>