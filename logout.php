<?php

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-86400,'/'); 
}


session_unset();

session_destroy();

echo "You've been logged out";

echo "<p> <a href='login.php'>Log Back In</a></p>";

?> 