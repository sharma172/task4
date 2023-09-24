<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<style>
.container{
	width: 90%;
	margin:auto;
	overflow: hidden;
}
input[type=text], input[type=password] ,input[type=submit] {
border:none;
outline:none;
border:2px #fff dotted;
background:black;
border-radius:500px;
box-sizing:border-box;
color:#fff;
font-size:16px;
padding:10px;
text-align:center;

}
.sub{
	border:none;
outline:none;
border:2px #fff dotted;
background:black;
border-radius:500px;
box-sizing:border-box;
color:#fff;
font-size:16px;
padding:10px;
text-align:center;
}

.bu{
	text-decoration: none;
	color:black;
	width:40px;
	height:60px;
	background-color: rgb(223,255,0);
}

#homefooter{
  background-color: black;
  text-align: center;
  font-size: 13px;
  font-family: 'Archivo', sans-serif;
  color: white;
  padding: 20px 0;

}
#navbar
{
	background-color: green;
	color:white;
}
#navbar ul{
	padding:0;
	list-style: none;
}
#navbar li
{
	display: inline;
}
#navbar a{
	color:#fff;
	text-decoration: none;
	font-size: 18px;
	padding-right: 15px;
}
body{
	margin:0;
	padding: 0;
	background-color: black;
	background-size: cover;
	background-repeat: no-repeat;
	color: white;
}

.contains{
	 font-size: 20px;
	padding: 10px;
	box-sizing: border-box;
	margin-top: 50px;
	margin-left:50px;
	margin-right: 40px;
	width: 300px;
	border: 1px dotted black;
	box-shadow: 3px 3px 10px yellow;
	height: 300px;
	color:white;
	float:left;

}
.card-title{
	color:blue;

	border:border:2px #fff dotted;
	font-weight: bold;	
}
.card-text{
	color:black;
	font-size:16px;
	font-weight: bold;	
}
.im{
	height:50px;
	width: 50px;

}
</style>
</head>
<body>
	

<nav id="navbar">

			<div class="container">

			
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
			
			</div>
		</nav>
		
		<?php 
		$conn=mysqli_connect('localhost','root','','tourism');
		if($conn-> connect_error){
			echo "connection failed";
		}
		$sql=" select id,place, category, cost, description, image from admin";
		$result=$conn->query($sql);
		if($result-> num_rows > 0){
			
			while($row= $result -> fetch_assoc()){
				echo '<div class="contains">';
				$a=$row["image"];
				?>
				
				 <img src="<?php echo $a; ?>"  alt="bb" height="150px" width="270px" /><br>
				<?php
				echo "Id: $row[id]".'<br>';
				echo "place: $row[place]".'<br>';
				echo "cost: $row[cost]".'<br>';
				echo "Description: $row[description]";
				echo '</div>';

				
			}

		}
		else{
			echo "no data found";
		}
		$conn -> close();
		?>
		
		
	<br>
	
<footer id="homefooter">
  <div class="container">
  	<br>
   <input type="text" id="footerinfo"  name="id" placeholder="Enter valid ID number"><br>
<br>
  <a class=sub href="thank.php" >submit</a>
</h1>

  </div>
</footer>

</body>
</html>