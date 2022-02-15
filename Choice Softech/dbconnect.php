<?php
$link=mysqli_connect('localhost','root','');
$db="choice";
if(!$link)
{
die("could not connect".mysqli_error());
}
else
{
//echo'connected successfully';
}
$db=mysqli_select_db($link,"choice");
if(!$db)
{
	die('could not select:'.mysqli_error($link));
}
else
{
	//echo 'could select';
}
?>