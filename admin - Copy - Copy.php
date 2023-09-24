<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style >
		.irup{
			margin:0;
			padding-top: 10px;
			width: 100%;
			height: 90px;
			background-color: blue;
			color: rgb(223,255,0);
			text-align: center;

		}
		body{
			background: url('cave.jpg'); 
			background-repeat: no-repeat;
			background-size: cover;
			color: rgb(240,255,240);


		}
		input[type=text], input[type=password],input[type=email] ,input[type=file] ,textarea {
border:none;
outline:none;
border:2px  rgb(223,255,0) dotted;
background:transparent;
border-radius:500px;
box-sizing:border-box;
color:#fff;
font-size:16px;
padding:10px;
text-align:center;

}
::placeholder{
color:rgba(255,255,255,0.5);
text-align:center;
}
		.admin{
			margin-top: 90px;
			margin-left: 400px;
			margin-right:90px;
			border:1px solid yellow;
			box-shadow: 1px 1px 10px green;
			padding-top: 20px;
			padding-left: 20px;
			padding-bottom: 20px;
			width: 600px;
			height: 450px;
		}
		button:hover{
	color: red;
}

	</style>
</head>
<body>
	<?php
	session_start();
      $con=mysqli_connect('localhost','root','') or die('unable to connect');
      if(!mysqli_select_db($con,'tourism'))
      {
      	echo 'not connected';
      }
      
    
      if(isset($_POST['submit'])){
      $place=$_POST['place'];
      $category=$_POST['category'];
      $cost=$_POST['cost'];
      $description=$_POST['description'];
      $image=$_POST['image'];
          $q=" select * from admin where place='$place' && category='$category' ";

      $jquery="insert into admin(place,category,cost,description,image) values('$place','$category','$cost','$description','$image')";
      
      $result = $con->query($jquery);
      header('admin.php');
  }
  ?>



	<div class="irup">
		<h1> Admininistration Page</h1>
	</div>
	<form method="POST" action="admin.php" enctype="multipart/form.data">
	<div class="admin">
		Place:<input type="text" name="place" required >
		<br><br>
		Category:<input type="text" name="category" required>
		<br><br>
		Cost:<input type="text" name="cost" required>
		<br><br>
		Description:<textarea name="description" rows="4" cols="15" required></textarea>
		<br><br>
		Image:<input type="file" name="image">
		<br><br>
	   <input name = "submit" id="submit" class="submit" style="margin-left: 150px;" type="submit" value = "submit" >
	</div>
</form>

</body>
</html>