<?php
session_start();
$message = "";
if(count($_POST)>0) {
    $con = mysqli_connect('137.0.0.1:3306', 'root', '', 'test') or die("Connection Failed");
    $result = mysqli_query($con, "SELECT * from login_user where user_name='" . $_POST["user_name"] . "'and password = '" . $_POST["password"]. "'" );
    $row = mysqli_fetch_assoc($result);
    if(is_array($row)) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
    } else {
        $message = "invalid Username or Password";
    }
}

if(isset($_SESSION['id'])) {
    header("Location:index.php");
}

?>



<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>