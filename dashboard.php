<?php
require ('connection.php');
if (isset($_POST['approvebtn'])) {
	$id = $_POST['id'];
	$sql = "UPDATE `info` SET `hodcheck`=1 WHERE `id`='$id'";
	$result = mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
   <head>
   	  <link rel="stylesheet" type="text/css" href="style.css">
      <title>DETAILS</title>
   </head>  
   <body>
   	  <table id="Responsive">
   	  	<h1>STUDENT'S DETAILS</h1>
   	  	<tr>
   	  		<th>FIRST NAME</th>
   	  		<th>LAST NAME</th>
   	  		<th>REGISTERATION NUMBER</th>
   	  		<th>EMAIL ADDRESS</th>
   	  		<th>BLOCK NUMBER</th>
   	  		<th>ROOM NUMBER</th>
   	  		<th>DATE OF LEAVE</th>
   	  		<th>DATE OF RETURN</th>
   	  		<th>PHONE NUMBER</th>
   	  		<th>PAREN'S PHONE NUMBER</th>
   	  		<th>REASON</th>
   	  		<th>LEAVE ADDRESS</th>
   	  		<th>HOD CHECK</th>
   	  	</tr>
   	  	<?php
          // $u = "SELECT firstname from info where firstname = 'Sarthak'";
          // echo $u;
   	     $query = "SELECT id, firstname, lastname, regno, email, blockno, roomno, dateofleave, dateofreturn, phoneno, parentsphoneno, reason, leaveaddress from info where hodcheck = 0";
          // echo $query;
   	     $result = mysqli_query($conn,$query);
          // echo $result;

   	     if(mysqli_num_rows($result) > 0){
   	       while($row =mysqli_fetch_assoc($result)) {
   	       echo"<tr><td tHD>".$row["firstname"]."</td><td tHD>".$row["lastname"]."</td><td tHD>".$row["regno"]."</td><td tHD>".$row["email"]."</td><td tHD>".$row["blockno"]."</td><td tHD>".$row["roomno"]."</td><td tHD>".$row["dateofleave"]."</td><td tHD>".$row["dateofreturn"]."</td><td tHD>".$row["phoneno"]."</td><td tHD>".$row["parentsphoneno"]."</td><td tHD>".$row["reason"]."</td><td tHD>".$row["leaveaddress"]."</td><td><form method='post' action='dashboard.php'> <input type='hidden' name='id' value=".$row["id"]."> <button type='submit' name='approvebtn'>Approve</button></form></td></tr>";

   	   }
   	echo "</table>";
   	 }
   	 else{
   	  echo "0 result";
   	}
   	$conn-> close();
    ?>
   	  	</tr>
   	  </table>
   	</body>
</html>   	