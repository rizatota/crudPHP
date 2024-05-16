<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$name="crud";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$name);

if(!$conn){
    die("Connection failed");
}