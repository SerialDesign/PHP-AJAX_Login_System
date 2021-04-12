<?php 

// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "inc/config.php";

echo $_SESSION['user_id'] . ' is your user id';
exit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/css/uikit.min.css" />
</head>
<body>
    
    <div class="uk-section uk-container">
       
    </div>


    <?php require_once "inc/footer.php" ?>

</body>
</html>