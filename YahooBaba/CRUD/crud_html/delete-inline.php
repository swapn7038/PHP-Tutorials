<?

echo $stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

header("Location: http://localhost/PHP-Tutorials\YahooBaba\CRUD\crud_html\index.php");

mysqli_close($conn);

?>

<!-- PHP-Tutorials\YahooBaba\CRUD\crud_html\index.php -->