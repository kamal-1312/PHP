<? php 

include "conn.php" ;

if (isset( $_POST ["done"]))
  {
	$id = $_POST["id"]; 
	$username = $_POST["username"];
	$password = $_POST["password"];

	$q = "INSERT INTO login VALUES("$id1","$username1","password1")";
	
	$query = mysqli_query($con ,$q);
  }

?>

<!DOCTYPE html>
<html>
<body>

<form method = "POST">
<h3>INSERT OPERATION </h3>
<label>ID </label>
<input type = "number" name ="id"><br>
<label>USERNAME </label>
<input type = "text" name ="username"><br>
<label>PASSWORD </label>
<input type = "text" name ="password"><br>

<button type ="submit" name ="done">SUBMIT</button><br>

</form>
</body>
</html>
  
	
	