
<?php

 $stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['sclass'];
 $stu_phone = $_POST['sphone'];

// above code se hamare pass data aa jayega, jo user form me put karega

// ab hame is data ko db me save marna hoga.

$conn = mysqli_connect("localhost", "root", "", "crud") or die();

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}',  sclass = '{$stu_class}', phone '{$stu_phone}' WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

header("Location: http://localhost/PHP-Tutorials/YahooBaba/CRUD/crud_html/index.php");

// Location ke baad space naki dena hota he.

mysqli_close($conn);


?>

