<?php
define('__CONFIG__', true);
require_once "inc/config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Toootle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
       
    </head>
    <body>
        
        <div class="uk-section uk-container">
            <h1>Hello</h1>
            <a href="/login.php">Login</a>
            <a href="/register.php">register</a>
        </div>  

        <?php require_once "inc/footer.php"; ?>
       
    </body>
</html>