<?php

//Create Read Update Delete
//CRUD

   $connection = mysqli_connect('localhost','root','', 'loginapp');
    
    if ($connection) {
       echo "we are connected";  
    } else {
    die ("connection to the database failed");
    }
    
    $query ="SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);

//if connection failed - stop everything  
    
    if (!$result) {
        
       die ('Query FAILED' . mysqli_error());
            
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
  
  <div class="container">
     <div class="col-sm-6">
       
<?php  
 
//this will fetch the connection and query validation from above on $result variable. NExt we then display this by assigning it to a variable called $row 

//mysqli_fetch_assoc - returns associative array where we can actually read the comments
         
       while($row = mysqli_fetch_assoc ($result)) {
           
        ?>
        
        <pre>
            
        <?php     
        print_r($row);
        ?>          
        </pre>  
           
        <?php
        }
         
?>
         
     </div>
      
      
      
  </div>
   

    
</body>
</html>