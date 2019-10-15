<?php 
//allow the confog
define('_config_', true);
//require the config
require_once "inc/config.php"; ?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Page Title</title>
        <link rel="stylesheet" href="">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0/css/uikit.min.css" />

    </head>
    <body>
    <div class="uk-section uk-container">
        <?php echo "hello world. today is: ";
        echo date("Y m d"); ?>
        <p>
             <a href="/php_login/login.php">Login</a>
             <a href="/php_login/register.php">Register</a>
        </p> 
    </div>

    <?php require_once "inc/footer.php"; ?>
   
    </body>
</html>
