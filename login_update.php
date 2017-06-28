<?php include "db.php";?>
<?php include "functions.php";?>

<?php

if(isset($_POST['submit'])) {
    
   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];
        
//update the users table // set points to which columns you want to update      
$query = "UPDATE users SET "; 
    
//update the username column in the database
$query .= "username = '$username', ";  
    
//update the password column
$query .= "password = '$password' "; 
   
//data from database for ID is interger so no need for quotations
//the WHERE clause, if given, specifies the conditions that identify which rows to update. 
    
$query .= "WHERE id = $id ";

//checking that connection is present and that fields are entered    
$result = mysqli_query($connection, $query);

    if (!$result) {
        
        die("QUERY FAILED" . mysqli_error($connection));
    }

//mysqli_error($connection)); - adds a lot more info to error messages   

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
       
     <form action="login_update.php" method="post">
        
            <div class="form-group">
            <label for="username"> Username </label>
            <input type="text" name="username" class="form-control">
            </div>
           
            <div class="form-group">
            <label for="password"> Password </label>  
            <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group"> 
            
            </div>
            
            <div class="form-group">               
            
            
            <select name="id" id="">
            
              <?php                
                  showAllData();  
              ?>
            
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            
            </select>
            </div>
            
         
     </form>
         
     </div>
      
      
      
  </div>
   

    
</body>
</html>