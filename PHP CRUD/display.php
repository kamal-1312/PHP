<!DOCTYPE html>
<html>
<body>
 <h2>DISPLAY TABLE DATA </h3>
 <br>
 <table>
 
 <tr>
 <th>ID</th>
 <th>USERNAME</th>
 <th>PASSWORD</th>
 <th>DELETE</th>
 <th>UPDATE</th>
 </tr>
 
 <? php

include 'conn.php'; 
 
$q = "select * from login ";

$query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query))
 {
 ?>
 <tr >
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <button > <a href="delete.php?id=<?php echo $res['id']; ?> > Delete </a>  </button> </td>
 <td> <button > <a href="update.php?id=<?php echo $res['id']; ?> > Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

</body>
</html>
