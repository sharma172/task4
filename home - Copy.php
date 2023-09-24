<!DOCTYPE html>
<html>
<head>
	<title>Holiday Club</title>
	<style >
		body{
	background-color: black;
	color: #555;
	font-size: 16px;
	color: white;
	line-height: 1.6em;
	margin: 0;
}
.section{
	background-color:black;
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
#main-header{
	background-color: rgb(255,223,0);
	color: red;

}
.contain{
	float: left;
	padding: 10px;
	box-sizing: border-box;
	margin-top: 500px;
	margin-left:80px;
	width: 25%;
	border: 1px dotted black;
	height:350px;
	box-shadow: 1px 1px 10px white;
}
.contains{
	float:left; 
	padding: 10px;
	box-sizing: border-box;
	margin-top: 500px;
	margin-left:50px;
	margin-right: 40px;
	width: 25%;
	border: 1px dotted black;
	box-shadow: 1px 1px 10px white;
	height: 350px;

}
.containl{
	float: left;
	padding: 10px;
	box-sizing: border-box;
	margin-top: 500px;
	margin-left:30px;
	margin-right: 40px;
	width: 25%;
	border: 1px dotted  black;
	height: 350px;
	box-shadow: 1px 1px 10px white;
}
.maindiv{
	margin-top: 50px;
	width:90%;
	height:400px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%,-50%);
	background-image: url('beach.png');
	background-size: 100% 100%;
	box-shadow: 1px 1px 20px 5px white;
	animation: slider 25s infinite linear;


}
a:hover{
	color:red;
}
a:active{
	color:blue;
}
.button{

	float: left; 
	padding: 10px;
	margin-top: 40px;
	margin-left:80px;
	margin-right: 40px;
	width: 60px;
	border: none;
	height: 25px;
	background-color: transparent;
	text-decoration: none;
	color:rgb(255,223,0);
	box-shadow: 1px 1px 10px 5px white;
	margin-bottom: 100px;

}

@keyframes slider{
	0%{
		background-image: url('scenerio.jpg');

	}
	35%{
		background-image: url('safari.jpg');

	}
	75%{
		background-image: url('beach.png');

	}

}
</style>
</head>
<body>
	<header id="main-header">
		<div class="container">
			<h1>Holiday Club</h1>
		</div>
	</header>

		<nav id="navbar">

			<div class="container">

			
				<ul>
					<li><a href="login.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
			
			</div>
		</nav>
		<div class="maindiv">
		</div>	
		<br>
	    <section>
		<div class="contain">
			<h2 >Entertainment</h2><br>
			<h4 >Entertainment can really make your event and we work with a host of the country’s finest entertainers. We have been providing entertainment for events for years, consistently delivering great entertainers and entertainment. </h4>
		</div>
	
		<div class="contains">
			<h2 >Thrill and Excitement</h2><br>
			<h4 >Excitement is something which everyone looksups while having outdoor fun.We provide you with all the facilities and Safety along with the excitement you are looking for in your life .We assure you with all your specifications for the plan you had selected for. </h4>
		</div>
	
		<div class="containl">
			<h2 >Knowledge</h2><br>
			<h4 >Knowledge defines who we are .And the knowledge of our ancestors define who we are and where we came from.One should never forget his roots and There is something you can learn from each and every aspect. </h4>
		</div>

<a class="button"  href="login.php">Login</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a class="button" href="signup.php">SignUp</a>
</section>
<br>
<br>
<br>
</body>
</html>