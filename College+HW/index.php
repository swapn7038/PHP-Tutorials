<?php


if(isset($_POST["simple_interest"])){

    $principle_amount = $_POST['principle_amount'];
    $rate_of_interest = $_POST['rate_of_interest'];
    $time = $_POST['time'];

    $si = 0;

    $si = $principle_amount * $rate_of_interest * $time / 100;

    echo $si;



 // 4 values

 //! 1. amount borrowed
 //! 2. rate of interest 
 //! 3. time
 //! 4. 

}


?>



<html>
<head>
    <title>Document</title>
</head>
<body>
    

<form action="" method="post">
    <input placeholder="Enter principle amount" type="number" name="principle_amount">
     <input placeholder="Enter principle rate of interest" type="number" name="rate_of_interest">
     <input placeholder="Enter Time" type="number" name="time">
      <input type="Submit" name="simple_interest">
      <!-- name attribute will call the php code  -->
</form>
</body>
</html>