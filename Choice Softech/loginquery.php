<?php
session_start();
include("dbconnect.php");
try
{
$username=$_POST['userName'];
$password=$_POST['password'];
$user_type=$_POST['user_type'];
$sql="SELECT * FROM registration WHERE email='$username' AND password='$password'";
$result=mysqli_query($link,$sql);
$counter=0;
if($result==FALSE)
{
	echo"error".$sql."<br>".mysqli_error($link);
}
while($row=mysqli_fetch_array($result,MYSQLI_NUM))
{
	$counter=1;
	$regid=$row[0];
	$temp=$row[2];
}
if($counter>0 && $temp=='admin' )
{
	$_SESSION['regid']=$regid;
	header("Location:adminindex.php");
}
else
{
  header("Location:Error.php");
  exit();
}
}
catch(Exception $e)
{
  echo $e;
}
?>  
