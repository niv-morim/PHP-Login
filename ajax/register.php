    <?php 
    //allow the config
    define('_config_', true);
    //require the config
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        //header('Content-Type: application/json');
        $return=[];

        $email=Filter::String($_POST['email']);

        $findUser= $con->prepare("SELECT user_id FROM users WHERE email= LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email ,PDO::PARAM_STR);
        $findUser-> execute();

        if($findUser->rowCount() == 1){
            $return['error']="You already have an account";
            $return['is_logged_in']=false;
        }
        else{

            $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser=$con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $adddUser->bindParm(':email', $email ,PDO::PARAM_STR);
            $adddUser->bindParm(':password', $password ,PDO::PARAM_STR);
            $adddUser-> execute();

            $user_id=$con->lastInsertId();
            $_SESSION['user_id']=(int) $user_id;

            $return['redirect']='/dashboard.php?message=welcome';
            $return['is_logged_in']=true;
        }

        echo json_encode($array, JSON_PRETTY_PRINT); exit;
    }
    else{
        exit('invalid URL');
    }

    ?>

