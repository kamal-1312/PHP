<? php

session_start() ;

echo "Welcome ".$_SESSION["email"];

//logout

echo "<a href = "logout.php">LOGOUT </a>" ;

?>