<?php
session_start();

echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // echo "Favorite Color : " . $_SESSION["favcolor"];
    if(isset($_SESSION["favcolor"])){
    echo "My name isv" . $_SESSION["firstName"] .  $_SESSION["lastName"] . " and I like  " .  $_SESSION["favcolor"] .  "Color"; 
    }
    ?>
</body>
</html>