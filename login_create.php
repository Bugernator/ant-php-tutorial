<?php

//Create Read Update Delete
//CRUD

if(isset($_POST['submit'])) {
    
   $username = $_POST['username'];
   $password = $_POST['password'];
    
// connection command (address, username, password, MySQL table selected,)
    
   $connection = mysqli_connect('localhost','root','', 'loginapp');
    
    if ($connection) {
       echo "we are connected";  
    } else {
    //won't execute anymore code and gives user an error
       die ("connection to the database failed");
    }
  
//SQL query - you can type this into mySQL and it will do the same thing:
    
    $query ="INSERT INTO users (username,password)";
    
//Concatinate these two commands, we're inserting the value people write in the variable for username and password. The above is columns, but the below is strings so we need to put quotations around the variable
    
    $query .= "VALUES ('$username','$password')";

//use the prebuilt function and take two parameters, the connection and the query what we are sending.
    
    $result = mysqli_query($connection, $query);

//if connection failed - stop everything    
    if (!$result) {
        
        die ('Query FAILED' . mysqli_error());
            
}
}
//check that we're receiveing the data with the below
    
// echo $username;
// echo $password;
    
    
//this will just check that both username and password are there
/*    
    if($username && $password){
        
     echo $username;
     echo $password;   
        
    } else {
        
       echo "This field cannot be blank";
        
    }
    
}*/

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
   
<div class"container">  
 
   <div class="col-xs-6">
     
     <form action="login_create.php" method="post">
        
            <div class="form-group">
            <label for="username"> Username </label>
            <input type="text" name="username" class="form-control">
            </div>
           
            <div class="form-group">
            <label for="password"> Password </label>  
            <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group">               
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
         
     </form>
          
   </div>  
  
</div>
   
    
</body>
</html>