<?php
include('connection.php'); 

?>
<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <title>SignUp</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     
    </head>
    <body>
        <div class= "container">
            <h1>Password Hashing</h1>
        <?php 
            $password = password_hash("sarthakv14",PASSWORD_DEFAULT);
            echo $password;
            
            
        ?>    
        </div>

        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>