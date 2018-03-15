<?php
session_start();
include 'db.php';
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM tbl where username='$username'AND password='$password'";

$res=mysqli_query($conn,$sql);
if(!$row=$res->fetch_assoc())
{
	echo "not logged in";
}
else 
{
	$_SESSION['id']=$row['id'];
}
header("location:index.php");	





?>