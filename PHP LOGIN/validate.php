<? php

$myemail = "kantk6701@gmail.com";
$mypass = "3614" ;

if(isset($_POST["login"]))
  {
    $email = $_POST["email"];
	$password = $_POST["password"];
  }
  
 else
  {
    header("location:login.php")
  } 
  
  if( $email == $myemail and $password == $mypass)
  {
	 session_start();
	 $_SESSION["email"] = $email ;
	 header("location:welcome.php");
	  
  }
  
  else 
  {
	  echo"Email or Password Invalid" <br>
 	  Click here to < a href = "login.php" > try again </a> " ;  
	  
  }
  
  ?>