<?php
if(isset($_POST['login']))
{
    function validateFormData($formData){
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    } 
    $formUser = validateFormData($_POST['username']);
    $formPass = validateFormData($_POST['password']);
    include('connection.php' );
    $query = "SELECT username,email,password FROM users WHERE username = '$formUser'";
    
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result) > 0)
        
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $user = $row['username'];
            $email = $row['email'];
            $hashedPass = $row['password'];
        }
        if($formPass === $hashedPass)
        {
            session_start();
            $_SESSION['loggedInUser'] = $user;
            $_SESSION['loggedInEmail'] = $email;
            header("Location:profile.php");
        }
        else{ 
            $loginError = "<div class='alert alert-danger'>Wrong username/password combination.Try again.</div>";
            
        }
    }
    else
    {
        $loginError = "<div class='alert alert-danger'>No such user in database.<a class='close' data-dismiss='alert'>&times;</a></div>";
    }
    
    mysqli_close($conn);
    
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    </head>
    <body>
        <div class= "container">
            <h1>Login</h1>
            <p class = "lead">Use this form to log in to your account</p>
            
            <?php echo $loginError; ?>
            <form class=" form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                <div class="form-group">
                    <label for="login-username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="login-username"
                    placeholder="username" name="username">
                     
                </div>
                <div class="form-group">
                    <label for="login-password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="login-password"
                    placeholder="password" name="password">
                     
                </div>
                <button type="submit" class="btn btn-default"
                        name="login">Login!</button>
                
            
            
            
            </form>
                                                    
        
        </div>
         <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>