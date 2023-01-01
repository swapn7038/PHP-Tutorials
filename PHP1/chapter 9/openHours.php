<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Open Hours</h1>
    <?php
        date_default_timezone_get("EST");
        if(date("|") == 'Sunday') {
            echo "Sorry, we are closed today.";
        } else {
            echo "We are open today from 10 AM to 9 PM";
        }
    ?>
</body>
</html>