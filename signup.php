<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<script type="text/javascript" src="signup.js"></script>
	<style>
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
body{
	margin:0;
	padding: 0;
	background:url('sign.jpeg');
	background-size: cover;
	background-repeat: no-repeat;
	color: white;
}
input[type=text], input[type=password],input[type=email] ,textarea {
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
::placeholder{
color:rgba(255,255,255,0.5);
text-align:center;
}
.signup{
	margin-left: 400px;
	margin-top: 50px;
	height: 75%;
	width:50%;
	background: transparent;
	padding-left: 40px;
	padding-right: 60px;
	padding-top: 40px;
	padding-bottom: 40px;
	box-sizing: border-box;
	border: 1px dotted yellow;
	box-shadow: 1px 2px 10px white;
}
button:hover{
	color: red;
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
      
      $firstname=$_POST['fname'];
      $lastname=$_POST['lname'];
      $passw=$_POST['pass'];
      $password=sha1($passw);
      $cpassword=$_POST['cpass'];
      
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      
      $address=$_POST['address'];
      $city=$_POST['city'];
      $pincode=$_POST['pincode'];
      $state=$_POST['state'];
      $name=$firstname.$lastname;
      $q=" select * from signup where email = '$email' && password='$password' ";

      $jquery="insert into signup(fname,lname,pass,email,phone,address,city,state,pincode) values('$firstname','$lastname','$password','$email','$phone','$address','$city','$state','$pincode')";
          
      $result = $con->query($jquery);
      header('home.php');
  }
  ?>
  <form action="" method="POST">
		<div class="signup">
			First Name: &nbsp<input id="fname" name = "fname" type="text" placeholder="First name" required><br><br>
          Last Name:&nbsp<input id="lname" name = "lname" type="text" placeholder="Last name" required=""><br><br>
          Password:&nbsp<input id="pass" name = "pass" type="password"  placeholder="Password" onkeyup="checkpass(); " required>
          <br><br>
          Confirm Password:<input id="cpass" name = "cpass" type="password" placeholder="Confirm Password" onkeyup="matchpass();" required>
          
          <br><br>
          Email Id:&nbsp<input id="email" name = "email" type="email" placeholder="EmailId" required=""><br><br>
          Phone Number:&nbsp<input id="phone" name = "phone" type="text" onkeyup="checknumber();" placeholder="Contact Number" required>
          <br><br>Gender:&nbsp
            <label for="male">Male</label>
            <input name="gender" id="male" type="radio" value = "Male">
            <label for="female">Female</label>
            <input name="gender" id="female" type="radio" value = "Female">
            <label for="others">Others</label>
            <input name="gender" id="others" type="radio" value = "Others"><br><br>
          Address:<textarea id="address" name = "address" rows="4" cols="30" placeholder="Address" required=""></textarea><br><br>
          City:<input id="city" name = "city" type="text" placeholder="city"><br><br>
          State:<input id="state" name = "state" type="text" placeholder="State"><br><br>
          Pincode:<input id="pincode" name = "pincode" type="text" onkeyup="checkpin();" placeholder="pincode"><br><br>
          
          <div class="buttons">
        <input type="button" value="Validate" class="validate" onclick="validate();">&nbsp &nbsp &nbsp &nbsp

        <input name = "submit" id="submit" class="submit" type="submit" value = "submit" > &nbsp &nbsp &nbsp &nbsp
        <a href="home.php" style="text-decoration: none;
	color:black;
	width:40px;
	height:23px;
	background-color: white;
">cancel</a> <br>
      </div>
  </div>
</form>


</body>
</html>