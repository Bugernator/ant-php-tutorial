<?php include "db.php"; ?>



<?php

function showAllData () {

// set connection to be global so we can call it from the update page.
    global $connection;
    
    $query ="SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
       die ('Query FAILED' . mysqli_error());
            
}
  while($row = mysqli_fetch_assoc($result)){

                    $id = $row['id'];
echo "<option value='$id'>$id</option>" ; 
}
}

