<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php

                   $conn = mysqli_connect("localhost", "root", "", "crud") or die();

                   $sql = "SELECT * FROM studentclass";

                   $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

                   while($row = mysqli_fetch_assoc($result)){

            ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>

                <?php
                   }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>

<?php

// First thing we did here, is we linked database, through mysqli_connect(), 
// then write query, then use mysqli_fetch_assoc() function. 

// Here we shown data from database, which is class names (cname), like this we can show any data here. 
// Like any => names, maybe photos as well, strings, numbers.

// action attribute in html => action ke andar us file ka naam dete he basically, 
// jaha par iss form ko save karane ka code likhana he. 

?>
