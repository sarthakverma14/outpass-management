<?php
include('connection.php'); 
$nameError="";
$passwordError="";
$emailError="";
if(isset ($_POST["add"]) ){
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    } 
    $username = $email = $password = "";
    if(!$_POST["username"]){
        $nameError="Please enter a username<br>"; 
    }else
    {
        $username=validateFormData($_POST["username"]);
    }
    if(!$_POST["email"]){
        $emailError="Please enter a email<br>";
    }else
    {
        $email=validateFormData($_POST["email"]);
    }

    if(!$_POST["password"]){
        $passwordError="Please enter a password<br>";
    }else
    {
        $password=validateFormData($_POST["password"]);
    }

    if($username && $email && $password){
    $query = "INSERT INTO users(id,username,password,email,signup_date,biography)VALUES(NULL,'$username','$password' , '$email',CURRENT_TIMESTAMP,NULL)";
    //$t = mysqli_query($conn, $query);
    
    // echo '<div class="alert alert-success">New record in database</div>';
    if(mysqli_query( $conn, $query ) ){
        echo '<div class="alert alert-success">New record in database</div>';
    }
    else{
       	echo "Error: ".$query."<br>".mysqli_error($conn);
    }

    }
}
mysqli_close($conn);
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
            <h1>SignUp</h1>
            
            
            <p class="text-danger">* Required fields</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ); ?>" method = "post">
                <small class="text-danger">
                *<?php echo $nameError; ?> </small>
                <input type="text" placeholder="Username"
                       name="username"><br><br>
                <small class="text-danger">
                *<?php echo $emailError; ?> </small>
                <input type="text" placeholder="Email"
                       name="email"><br><br>
                <small class="text-danger">
                *<?php echo $passwordError; ?> </small>
                <input type="password" placeholder="Password"
                       name="password"><br><br>
                <input type="submit" name="add" value="Add Entry">
            </form>
        
        </div>

        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>