<?php

$server = "localhost";
$username = "root";
$password = "sarthakv14";
$db = "outpass_management";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{    die("Connection failed: ".mysqli_connect_error());

 
}
//echo"connected successfully";

?>