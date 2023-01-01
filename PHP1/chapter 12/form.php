<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Saved</title>
</head>
<body bgcolor="#fff" text="#000">

<?php

// capture values posted to this php program from 
// the text fields in the form

$VIM = $_POST['VIN'];
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Price = $_POST['Asking_Price'];

// Build sql query using values from above

$qeury = "INSERT INTO Inventory
 (VIN,Make, Model, ASKING_PRICE)
 VALUES(
    '$vin',
    '$Make', 
    $Madel', 
    $Price 
    )";

    // print query to the browser so you can see it 

    echo ($query. "<br>");

    $mysqli = new mysqli('localhost', 'root', 'password', 'cars');

    // check connection

    if(mysqli_connect_errno()) {
        printf("Connect failed: %s\n ", mysqli_connect_errno());
        exit();
    }

    echo 'Connected successfully to mySQL. <BR>';

    // select datbase to work with


    $mysqli->select_db("Cars");
    echo ("Selecteed the cars database. <br>");

    if($result = $mysqli -> query($query)) {
        echo "<p> You have successfully entered $Make $Model into the database. </p>";
    }

    else {
        echo "Error entering $VIN into daatabse: ";
        mysql_error(). "<br>";
    }

    $mysqli-> close();

?>
    
</body>
</html>