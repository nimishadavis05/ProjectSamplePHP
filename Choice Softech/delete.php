<?php
include("dbconnect.php");
if(isset($_GET['id']))
{
$regid=$_GET['id'];
$sql="select * from  portfolio where pid='$regid'";
//echo $sql;
$result=mysqli_query($link,$sql);
while($sql1=mysqli_fetch_array($result,MYSQLI_NUM))
{
	
	$id=$sql1[0];
}
}
$sql="delete from portfolio  where pid='$regid'";
echo $sql;
if(mysqli_query($link,$sql))
{
	
	header("Location:adminindex.php");
}
else
{
	echo"error".$sql."<br>".mysqli_error($link);
}

?>