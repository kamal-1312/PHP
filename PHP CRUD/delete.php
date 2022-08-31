<?php

include "conn.php";

$id = $_GET["id"];

$q = "delete from 'login' where id = $id " ;

mysqli_query($con,$q);

header("location:display.php");

?>