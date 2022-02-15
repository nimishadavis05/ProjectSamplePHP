<?php
session_start();
include("dbconnect.php");
if(isset($_SESSION['regid']))
{
$regid=$_SESSION['regid'];
$sql="select * from registration where slno=$regid";
$result=mysqli_query($link,$sql);
while($sql1=mysqli_fetch_array($result,MYSQLI_NUM))
{
$email=$sql1[1];
}
}
else
{
header("Location:login.php");
}

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav>
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">ADMIN DASHBOARD</h4>
      <span class="text-muted"><a href="logout.php" style="color:white;">Logout</a></span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</nav>
<div class="container-fluid">
<div><br></div>
    <h1>Add portfolio</h1>

    



  <div class="container-fluid">
  <form method="post" action="portfolioquery.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="title"  name="title" placeholder="Title">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">URL</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="URL">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Upload file</label>
      <input type="file" class="form-control" id="pimage" name="pimage" >
    </div>
    
  </div>
  <div class="form-row">
    <div><br></div>
    <div class="form-group col-md-6">
      
     <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </div>

 
  
</form>
    </div>

    </div>










<div class="container-fluid">
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">URL</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
include("dbconnect.php");
$SQL="select * from portfolio";

$result=mysqli_query($link,$SQL);
while($sql1=mysqli_fetch_array($result,MYSQLI_NUM))
{
  echo "<tr style='color:green'><td style='color:green'>";
  echo "#</td><td>".$sql1[1]."</td><td>".$sql1[2]."</td><td><img src=".$sql1[3]." style='width:50px'/></td><td><a href='delete.php?id=$sql1[0]'>Delete</a></td>";
   echo "</tr>";
}
?>
   
      </tbody>
</table>

</div>












   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>