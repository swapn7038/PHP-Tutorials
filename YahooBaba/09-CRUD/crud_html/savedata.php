<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

// above code se hamare pass data aa jayega, jo user form me put karega

// ab hame is data ko db me save marna hoga.

$conn = mysqli_connect("localhost", "root", "", "crud") or die();

$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

header("Location: http://localhost/PHP-Tutorials/YahooBaba/CRUD/crud_html/index.php");

// Location ke baad space naki dena hota he.

mysqli_close($conn);


?>