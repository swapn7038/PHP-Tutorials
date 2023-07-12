

<?php

if(isset($_POST['compound_interest'])){
    $p= $_POST['principle_amount'];
    $r= $_POST['rate_of_interest'];
    $n= $_POST['time'];
    
    $ci = $p * (pow((1 + $r / 100), $n ));


     echo "Compound interest is : " .$ci;
}


?>

<html>
    <head>
        <title></title>
    </head>

    <body>
        <form action="" method="post">
            <input type="number" name="principle_amount" placeholder="Enter principle amount...">
            <input type="number" name="rate_of_interest" placeholder="Enter rate of interest...">
            <input type="number" name="time" placeholder="Enter time...">

            <input type="Submit" name="compound_interest">
        </form>
    </body>
</html>