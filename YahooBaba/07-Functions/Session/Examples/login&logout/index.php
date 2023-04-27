<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>