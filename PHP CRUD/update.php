<?php

include "conn.php";
 if (isset($_POST["done"]));
 {
   $id = $_GET["id"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   
   $q = "update login set id=$id ,username=$username password=$password where id=$id " ;
   
   $query = mysqli_query($con,$q);
  
header("location:display.php") ;
  
 }
 
?> 