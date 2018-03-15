<?php
session_start();
 include 'db.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO tbl (username,password)
VALUES ('$username' ,'$password')";
$res = mysqli_query($conn, $sql);
header("location:index.php");	
?>