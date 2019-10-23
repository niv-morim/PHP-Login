<?php 
//allow the confog
define('_config_', true);
//require the config
require_once "inc/config.php";
?>

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
    <div class="uk-grid uk-child-width-1-3">
    <form class="uk-form-stacked js-register">
    <h2>Register</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Email" required='required' placeholder="email@email.email">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="Password" placeholder="write new password">
        </div>
    </div>

    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display:none;'></div>

    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-default">Register</button>
    </div>

</form>
    </div>
    </div>

    <?php require_once "inc/footer.php"; ?>
   
    </body>
</html>
