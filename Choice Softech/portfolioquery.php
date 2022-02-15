<?php
include("dbconnect.php");
$title=$_POST['title'];
$url=$_POST['url'];

$uploaddir="uploadimage/";
$uploadfile=$uploaddir.basename($_FILES['pimage']['name']);
if(move_uploaded_file($_FILES['pimage']['tmp_name'],$uploadfile))
{
	echo "file uploaded successfully\n";
	
}
else{
	echo  "possible file upload attack!\n";
	//print_r($_FILES);
	echo $uploadfile;
	//print "</pre>";
}
$sql="insert into portfolio(title,url,pimage)
values('$title','$url','$uploadfile')";
//echo $sql;
//$result=mysqli_query($link,$sql);
if(mysqli_query($link,$sql))
{
	header("Location:adminindex.php");
}
else
{
	header("Location:error.php");
}


//echo '<pre>';

?>