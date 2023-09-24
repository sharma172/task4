<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<style >
		body{
			background-image: url('para.jpeg');
			background-repeat: no-repeat;
			width: 100%;
			height: 100%;
			background-size: cover;
			text-align: center;

		}
		.container{
	width: 90%;
	margin:auto;
	overflow: hidden;
}
#navbar
{
	background-color: black;
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
		.contain{
			margin-top: 100px;
			color: white;
			transition: all 4s ease-in-out;
		}
		form{
			margin-top: 50px;
			transition: all 4s ease-in-out;
		}
		.form-control{
			width: 600px;
			background:transparent;
			border:none;
			outline: none;
			border-bottom: 1px solid white;
			color: white;
			font-size: 18px;
			margin-bottom: 10px;
		}
		input{
			height: 45px;
		}
		form .submit{
			background:orange;
			border-color: transparent;
			color: white;
			font-size: 20px;
			font-weight: bold;
			letter-spacing: 10px;
			height: 50px;
			margin-top: 20px;
		}
		form .submit:hover{
			background-color: red;
			cursor: pointer;
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
	session_start();
      $con=mysqli_connect('localhost','root','','tourism');
      
    if(isset($_POST['submit']))
    {
      
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      $q=" select * from feedback ";

      $jquery="insert into feedback(name,email,message) values('$name','$email','$message')";
          
      $result = $con->query($jquery);
      header('feedback.php');
  }
  ?>
	<?php

	error_reporting(0);
    $con=mysqli_connect("localhost","root","","tourism");
    session_start();
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email_from=$_POST['email'];
	$Message=$_POST['message'];
	$email_subject='New form submission';
	$email_body="User name: $name.\n".
					"User email: $visitor_email.\n".
					"User message:$message.\n";

	$to="bsreenu1999@gmail.com";
	$headers="From: ".$email_from;
	$txt="You have received an email from:".$name.".\n\n".$Message;
	mail($to,$email_subject,$txt,$headers);
	header("location: feedback.php?mailsent");
}
	?>
	<div class="contain">
		<h1>Welcome</h1>
		<h2>We are here to help you on any further queries</h2>
	</div>
	<div class="contact-form">
		<form id="contact-form" method="post" action="feedback.php">
			<input type="text" name="name" placeholder="Your name" required class="form-control">
			<br><input type="email" name="email" placeholder="Your mailId" required class="form-control">
			<br><textarea name="message" class="form-control" placeholder="Message" row="4" required=""></textarea>
			<br><input type="submit" value="submit" class="form-control submit">
		</form>
	</div>

</body>
</html>