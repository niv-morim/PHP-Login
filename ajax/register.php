    <?php 
    //allow the config
    define('_config_', true);
    //require the config
    require_once "../inc/config.php";



    if($_SERVER['REQUEST_METHOD']=='post'){
        header('Content-Type: application/json');
        $return=[];

        $return['redirect']='/dashboard.php';
        echo json_encode($array, JSON_PRETTY_PRINT); exit;
    }
    else{
        exit('test');
    }


    ?>

