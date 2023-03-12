<?php 
// Allow the config
define('__CONFIG__',true);
// Require the config
require_once "inc/config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container ">
    <?php
        echo "Hello World today is : ";
        echo date("y/ m/ d")
    ?>
    <br>
    <a href="/login.php">Login</a>
    <br>
    <a href="/register.php">Register</a>

    </div>
<?php  
require_once "inc/footer.php";
?>

</body>
</html>