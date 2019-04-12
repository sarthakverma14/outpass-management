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
<html lang="en">
<head>
  <title>Outpass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>						
  <script src="form.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: orange;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 50%; /* Set width to 100% */
      margin: 100px;
      min-height:100px;
	  filter: blur(200px);
 
  }
  
  body {
     background: url('http://magarticles.magzter.com/articles/410/236636/59a598a8e876f/Manipal-University-Jaipur-Fostering-Academic-Excellence.jpg') fixed;
    background-size: cover;
}
*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: beige;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 30px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

  /* Hide the carousel text when the screen is less than 400 pixels wide */
  @media (max-width: 200px) {
    .carousel-caption {
      display: none;
	  
    }
  }
  </style>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="muj.php">OMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Student</a></li>
        <li><a href="warden.php">Warden</a></li>
        <li><a href="HOD.php">HOD</a></li>
		<li><a href="about.html">About our website</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="studentlogin.php"><span class="glyphicon glyphicon-log-in"></span> Student login</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="studentsignup.php"><span class="glyphicon glyphicon-log-in"></span> Student signup</a></li>
      </ul>
    </div>
  </div>
</nav> 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    


		
   
</div>

<div class="container">

            <form class="form-horizontal" id="fileForm" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

			
               <h2>Sign Up</h2>
                <div class="form-group">
                    <label for="RegistrationNumber" class="col-sm-3 control-label">Registration number </label>
                    <div class="col-sm-9">
                        <input class="form-control" required type="number" name="username" id="reg"  milength="9" maxlength = "9"  name="registeration" required>
                     <div class="help-block with-errors"></div>
                    </div>
                </div>
				
                <div class="form-group">
                   <label for="email" class="col-sm-3 control-label"><span class="req">* </span> Email Address: </label> 
				   <div class="col-sm-9">
                    <input class="form-control" type="text" name="email" id = "email"  required> 
                       
						</div>
						</div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="pass1" placeholder="Password" class="form-control" name="password" required>
                    </div>
                </div>
                
				
               <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <p><span class="error">* required field</span></p>
                    </div>
                </div>
                <a href="thank.html"><button type="submit" class="btn btn-primary btn-block" name="add" >Submit Request</button></a>
				
            </form> <!-- /form -->
			
        </div> <!-- ./container -->
  
<div class="container text-center">    
 

<br>
<br>
<br>

<footer class="container-fluid text-center">
  <p>This site is property of MUJ</p>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
