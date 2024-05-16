<?php
include("connection.php");
$userId = $_GET['id'];

$query = "DELETE  FROM crud WHERE id = '$userId' ";
$queryResult = mysqli_query($conn,$query) ;
header("Location:index.php");