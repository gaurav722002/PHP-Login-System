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
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
        <form class="uk-form-horizontal uk-margin-large js-register">
            <h2>Register</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" required='required' type="email" placeholder="you123@gmail.com">
        </div>
        <label class="uk-form-label" for="form-horizontal-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="password" required='required' placeholder="Password">
        </div>
    </div>
    <div class="uk-margin">
        <button class="uk-button-default" type="submit">Register</button>
    </div>
</form>
        </div>            
    </div>

<?php  
require_once "inc/footer.php";
?>

</body>
</html>