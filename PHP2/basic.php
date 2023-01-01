<?php
echo "Swapnil this side";
?>

<!-- opening and closing tags -->

<!-- you can also use below short tag -->
<!-- this is short hand to more verbose <?php ?> -->
<?=
'swapnil again';
?>

<!-- above code equivalent to  -->

<?php
echo "Swapnil again and again";
?>

<? 
echo 'this code is written within short tag, but will only work '. 
  'if short_open_tag is rnabled';
?>


<!-- Note : As short tags can be disabled it is recommended to only use
            normal tags to maximize the compability
-->

<!-- If a file contains only PHP code, it is preferable to omit the PHP
      closing tag at the end of the line. This prevents accidental whitespace
      or new lines begin added after the PHP closing tag, which may cause unwanted effects
      bacause PHP will start output buffering when there is no intention from the programmer 
      to send any output at that point in the script.   
-->