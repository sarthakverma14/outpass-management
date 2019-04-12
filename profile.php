<?php
session_start();
include('connection.php'); 


if (isset($_POST['firstname'])){
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $rno=$_POST['regno'];
      $mail=$_POST['mail'];
      $bno=$_POST['blockno'];
      $rmno=$_POST['roomno'];
      $dateol=$_POST['dol'];
      $dateor=$_POST['dor'];
      $phone=$_POST['pno'];
      $pno=$_POST['parentno'];
      $rsn=$_POST['reason'];
      $addr=$_POST['addr'];
    echo $fname;

      
      $sql = "INSERT INTO info(firstname, lastname, regno, email, blockno,roomno,dateofleave,dateofreturn,phoneno,parentsphoneno,reason,leaveaddress)VALUES('$fname','$lname','$rno','$mail','$bno','$rmno','$dateol','$dateor','$phone','$pno','$rsn','$addr')";


     if(mysqli_query($conn,$sql)){
      echo '<div class="alert alert-success">New record in database</div>';
         header("Location:thank.html");
     }
     else{
      echo "Error: ".$query."<br>".mysqli_error($conn);
     }
    }
  
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <title>Profile page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>			
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- or use local jquery -->
<script src="jqBootstrapValidation.js"></script>

    </head>
    <body>
<!--
        <div class= "container">
            <h1>Profile page</h1>
            <p class = "lead">welcome <?php echo $_SESSION['loggedInUser']; ?></p>
            <p>wour email is:<?php echo $_SESSION['loggedInEmail']; ?></p>
-->
            

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="w3school.html">MUJ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="w3school.html">Student</a></li>
        <li><a href="warden.html">Warden</a></li>
        <li><a href="HOD.html">HOD</a></li>
		<li><a href="about.html">About our website</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="studentlogin.html"><span class="glyphicon glyphicon-log-in"></span> Student login</a></li>
      </ul>
    </div>
  </div>
</nav> 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h1>Welcome</h1>
          
        </div>      
      </div>
      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h2>FILL THE FORM BELOW</h2>
        </div>      
      </div>
    </div>


		
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">

            <form class="form-horizontal" id="fileForm" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

			
               <h2>Enter the Outpass Form below</h2>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label"><span class="req">* </span> First name: </label>
					<div class="col-sm-9">
                    <input class="form-control" required type="text" name="firstname"  placeholder="Firstname" required> 
                       <div class="help-block with-errors"></div>
 
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label"><span class="req">* </span> Last name: </label>
					<div class="col-sm-9">
                    <input class="form-control" required type="text" name="lastname"  placeholder="lastname" required> 
                       <div class="help-block with-errors"></div>
 
                    </div>
                </div>
				<div class="form-group">
                    <label for="RegistrationNumber" class="col-sm-3 control-label">Registration number </label>
                    <div class="col-sm-9">
                        <input class="form-control" required type="number" name="regno" id="reg" pattern = .{9,9} required>
                     <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                   <label for="email" class="col-sm-3 control-label"><span class="req">* </span> Email Address: </label> 
				   <div class="col-sm-9">
                    <input class="form-control" type="email" name="mail" id = "email"  required > 
                       <div class="help-block with-errors"></div>
						</div>
						</div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="pass1" placeholder="Password" pattern="^[a-zA-Z0-9_.-]*$"  class="form-control" required>
                    <div class="help-block with-errors"></div>
					</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="pass2" placeholder="Password"   class="form-control"  data-validation-match-match="pass1"  required >
                   <div class="help-block with-errors"></div>
				   </div>
                </div>
				<div class="form-group">
                        <label for="BlockNo." class="col-sm-3 control-label">Block Number* </label>
                    <div class="col-sm-9">
                        <input type="text" id="block" placeholder="Please write your block" class="form-control" name="blockno" required >
                    <div class="help-block with-errors"></div>
					</div>
                </div>
				<div class="form-group">
                        <label for="roomNo." class="col-sm-3 control-label">Room Number* </label>
                    <div class="col-sm-9">
                        <input type="number" id="room" placeholder="Please write your room number" class="form-control" name="roomno" required>
					<div class="help-block with-errors"></div>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="leaveday" class="col-sm-3 control-label">Date of Leave*</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" id="leaveday" class="form-control" name="dol" required>
                    <div class="help-block with-errors"></div>
					</div>
                </div>
				<div class="form-group">
                    <label for="arrivalday" class="col-sm-3 control-label">Date of return*</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" id="arrivalday" class="form-control" name="dor" required>
                    <div class="help-block with-errors"></div>
					</div>
                </div>
				
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input required type="text"  id="phone" class="form-control phone" name="pno" maxlength="10" placeholder="enter your phone number" required>
                       <div class="help-block with-errors"></div>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="ParentsphoneNumber" class="col-sm-3 control-label">Parents Phone number </label>
                    <div class="col-sm-9">
                        <input required type="text" id="Pphone" class="form-control phone" name="parentno" maxlength="10" placeholder="enter your parents phone number" required>
                       <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="reason" class="col-sm-3 control-label">Reason* </label>
                    <div class="col-sm-9">
                        <input type="text" id="reason" placeholder="Please write your reason of leave" class="form-controlname="reason" name="reason" required>
                    <div class="help-block with-errors"></div>
					</div>
                </div>
                 <div class="form-group">
                        <label for="leaveaddress" class="col-sm-3 control-label">leave address* </label>
                    <div class="col-sm-9">
                        <input type="text" id="leaveaddress" placeholder="Please write your address of leave" class="form-control" name="addr"required>
                    <div class="help-block with-errors"></div>
					</div>
                </div>
				
               <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <p><span class="error">* required field</span></p>
                   <div class="help-block with-errors"></div>
				   </div>
                </div>
                <a href="thank.html"><button type="submit" class="btn btn-primary btn-block" name="btninsert" value="Save" >Submit Request</button></a>
				
            </form> <!-- /form -->
			
        </div> <!-- ./container -->
  
<div class="container text-center">    
 

<br>
<br>
<br>

<footer class="container-fluid text-center">
  <p>This site is property of MUJ</p>
</footer>

            <p><a href="logout.php" class="btn btn-danger btn-sm">Log Out </a></p>
                                                    
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>