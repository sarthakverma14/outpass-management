<?php 
include('connection.php'); 
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row["id"]." ". $row["username"]." ". $row["email"]."<br>"; 
    }
}    
    else
    {
        echo "no result.";
    }
    
mysqli_close($conn);
?>

<h1>here<\h1>