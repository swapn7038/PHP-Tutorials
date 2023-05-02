<?php
if(isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES); 
    echo "</pre>";
}
?>

<html>
<body>
    <form action="" method="$_FILES" enctype="multipart/form-data">
        <input type="file" name="image" /> </br> </br>  
        <input type="submit" /> 
    </form> 
</body>
</html>