<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
       $conn = mysqli_connect("localhost", "root", "", "crud") or die();

       $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
       // agar hame 2 ya 2 se jyada tables ke bich ka data utha ke lana he to ham join ka use karenge
       // uske baad hamne condition lagayi, ki konse tables se data lana he
       // student.sclass ka matlab ye hua ki student table me sclass name ka column. 
       // aaur isko hamne join kiya dusre table ke saath jo he studentclass aaur studentclass ka andar ka cid column.
       // studentclass.cid hame isi liye liya kyunki hame use student.sclass ke saath connect karna he 
       // 
       // sclass jo student table ke andar ka column he uss ka data type hamne int kiya he, 
       // int kyunki uske andar ham integer data type store karne wale the
       // 
       // dusre table studentclass ke andar jo cid column he uska data type bhi int liya hamne.

       // iske badd mysqli_query() ka use kiya...


       $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

       // query successful run hone ke baad, hame table me data show karna he
       // sabse pehle ham condition lagayenge, ki $result variable ke andar koi data aaya bhi he ki nahi
       // yaha uske liye ham ek function run karenge

       if(mysqli_num_rows($result) > 0) {
       
        // mysqli_num_rows() function se hame ye pata chalta he ki hame kitni number of rows mili he db se
        // database se jo bhi data aaya he wo aaya he $result nam ke variable ke andar
        // to $result variable ko hi mysqli_num_rows() ke andar pass kar denge

        // hamne > 0 ka sign isi liye lagaya ki, agar 0 se jyada matlab ek bhi record hoga to niche ka table show hoga

       
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php
         while($row = mysqli_fetch_assoc($result)){
            // iith aapan $row navacha variable ghetla, 
            // tya madhe sagla data fetch houn yeil
            // $row variable nantar aapan mysqli_fetch_assoc() cha use kela
            // hya function ne db madhel data/row/record fetch houn yetl, suppose 3 recors fetch houn aale
            // sagla data pahile $row navyachya variable madhe store hoil
            // assiciative form madhe
            // 
            // $result navacha variable ek array banla ahe, 
        ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname'];  ?></td>
                <td><?php echo $row['saddress'];  ?></td>
                <td><?php echo $row['cname'];  ?></td>
                <td><?php echo $row['sphone'];  ?></td>
                <td>

                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                    
                </td>
            </tr>
            <?php
              }
            ?>
        </tbody>
    </table>
<?php
 } else {
    echo "<h2> No record's found</h2>";
 }

 mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
