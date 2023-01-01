<!-- create program to find area of circle using class and onject -->
<!-- area of circle : 2*py*r -->


<!-- my sol -->
<!-- <?php

$radius = 10;

 echo $area = 2 * 3.14 * $radius;

?> -->


<!-- solution -->
<!-- 1. first create form with radius textbox and submit button  -->
<!-- 2. create class make method for calculate are of circle  -->
<!-- 3. Then, take request o fsubmit button and call that function by using create object of class  -->


<?php

class circle_area
{
    public function calc($rad){
        $pi = 3.14;
        $area = $pi*$rad*$rad;
        echo "Area of circle is: " .$area;
    }
}

if(isset($_REQUEST['submit'])) {
    $r = $_REQUEST['rad'];
    $obj = new circle_area();
    $obj->calc($r);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <tr>
            <td>Enter radius</td>
            <td><input type="text" name="rad" ></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="submit" value="click" />
            </td>
        </tr>
    </form>
</body>
</html>