<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>

<?php

// Output

// Filter Name	Filter ID
// int	257
// boolean	258
// float	259
// validate_regexp	272
// validate_domain	277
// validate_url	273
// validate_email	274
// validate_ip	275
// validate_mac	276
// string	513
// stripped	513
// encoded	514
// special_chars	515
// full_special_chars	522
// unsafe_raw	516
// email	517
// url	518
// number_int	519
// number_float	520
// add_slashes	523
// callback	1024

?>